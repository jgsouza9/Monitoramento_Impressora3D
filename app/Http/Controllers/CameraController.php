<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function showImage()
    {
        // URL do feed de imagem da câmera no Raspberry Pi
        $cameraUrl = 'http://<RaspberryPi_IP>:8081'; 

        // Passa a URL para a view
        return view('video', ['cameraUrl' => $cameraUrl]);
    }   
}
