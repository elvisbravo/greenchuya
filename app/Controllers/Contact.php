<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        return view('contact_form'); // Muestra el formulario
    }

    public function sendEmail()
    {
        $nombre = $this->request->getPost('form_name');
        $correo = $this->request->getPost('email');
        $mensaje = $this->request->getPost('form_message');

        $email = service('email');
        
        $email->setFrom($correo, $nombre);
        $email->setTo('greenweb@greenchuya.com');
        $email->setSubject('www.greenchuya.com ' . $nombre);
        $email->setMessage($mensaje);

        if ($email->send()) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Gracias por escribirnos, estaremos en contacto contigo lo antes posible']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Hubo un problema al enviar el correo.']);
        }
    }
}
