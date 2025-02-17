<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = [
            'home' => [
                'title' => 'Home',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur venenatis, dui eu fermentum cursus, orci massa interdum enim, vel placerat dolor felis ut tortor. Maecenas tempor non magna in bibendum. Curabitur nec commodo felis, eu sollicitudin est. Nulla venenatis, metus at consectetur tincidunt, tellus sapien sodales purus, vel elementum justo tellus vitae tellus. Nulla sit amet rutrum justo. Nunc sem leo, consectetur ac nunc a, venenatis luctus risus. Donec at eros auctor, posuere urna vitae, consectetur velit. Cras interdum leo fringilla sapien tempor laoreet. Integer id lacus ante. Ut dictum ex ac sem tempor, ut hendrerit metus luctus. Morbi tincidunt nisi nibh, id blandit mauris ornare sed. In nec elementum neque, ut tristique risus. Sed a eros in risus auctor imperdiet nec non quam.'
            ],
            'about' => [
                'nama' => 'Satria',
                'pekerjaan' => 'Pelajar',
                'minat' => 'unity dan flutter',
                'foto' => 'Satria.jpg'
            ],
            'contact' => [
                'title' => 'Kontak Kami',
                'form' => true
            ]
        ];

        return view('index', compact('data'));
    }
}
