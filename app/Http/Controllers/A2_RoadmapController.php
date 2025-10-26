<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Roadmap;


class A2_RoadmapController extends Controller
{
    public function Content(){
        $roadmap = Roadmap::first();
        return view('pengunjung.tentang.roadmap',compact('roadmap'));
    }

    public function View() {
        $roadmap = Roadmap::first();
        return view('admin.tentang.roadmap.index',compact('roadmap'));
    }

    public function Store(Request $request) {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Roadmap::create([
            'title'   => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Visi Misi berhasil disimpan.');
    }


    public function Update(Request $request, $id) {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $roadmap = Roadmap::findOrFail($id);
        $roadmap->update([
            'title'   => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Visi Misi berhasil diperbarui.');
    }



}