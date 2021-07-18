<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Examen;
use App\Models\Tipomuestra;
use Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        return view('welcome');
    }


    public function examenes()
    {
        $areas = Area::all();
        $tipos = Tipomuestra::all();

        //Cart::destroy();

        return view('frontend.examenes', compact('areas', 'tipos'));
    }

    public function getExamenes(Request $request)
    {
        $area = $request->area;
        $tipo = $request->tipo;
        $criterio = $request->criterio;
        $examenes = Examen::whereTipo('examen');
        if ($tipo > 0) {
            $examenes = $examenes->where('tipomuestra_id', $tipo);
        }

        if ($area > 0) {
            $examenes = $examenes->where('area_id', $area);
        }

        if ($criterio != '') {
            $examenes = $examenes->where('title', 'like','%'.$criterio.'%');

        }

        //dd($criterio);

        $viewButton = true;
        $examenes = $examenes->paginate(10);
        
        //return response()->json($examenes);
        return view('frontend.render.examenes', compact('examenes', 'viewButton'));
    }


    public function setCartExamen(Request $request)
    {
        $this->validate($request, [
            'examen' => 'required|numeric'
        ]);


        $examen = Examen::find($request->examen);
        $data = [];
        $viewButton = true;

        if ($examen) {
            // code...
            if (count(Cart::content()) > 0) {
                Cart::add($examen->id, $examen->title, 1, $examen->price, ['reserva' => []], 0);
                
                foreach (Cart::content() as $key => $cart) {
                    
                    if ($cart->id == $request->examen) {
                        
                        Cart::update($cart->rowId, 1);
                    }
                }
            }else{
                
                Cart::add($examen->id, $examen->title, 1, $examen->price, ['reserva' => []], 0);
                //dd('entro en sin cart');
            }

            
            $data = Cart::content();
            
            
        }

        //return response()->json($data);
        return view('frontend.components.cotizador', compact('data', 'viewButton'));
    }


    public function nosotros()
    {
        
        
        return view('frontend.nosotros');
    }

    public function promociones()
    {
        $promociones = Examen::whereTipo('promocion')->paginate(10);
        return view('frontend.promociones', compact('promociones'));
    }




    public function reservar()
    {
        $viewButton = false;
        if (count(Cart::content()) > 0) {
            return view('frontend.reservar', compact('viewButton'));
        }

        return redirect()->route('examenes');
    }

    public function pagar()
    {
        if (count(Cart::content()) > 0) {
            return view('frontend.pagar');
        }

        return redirect()->route('examenes');
        
    }

    public function confirmado()
    {
        return view('frontend.confirmado');
    }

    


    public function contacto()
    {
        
        return view('frontend.contacto');
    }


    public function contacto_send(Request $request)
    {

    }
}
