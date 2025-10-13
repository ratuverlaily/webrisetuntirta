<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Roadmap;


class A2_RoadmapController extends Controller
{
    public function roadmapContent(){
        $roadmap = Roadmap::first();
        return view('pengunjung.tentang.roadmap',compact('roadmap'));
    }

    public function roadmapView() {
        $roadmap = Roadmap::first();
        return view('admin.tentang.roadmap.index',compact('roadmap'));
    }

    public function roadmapStore(Request $request) {
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


    public function roadmapUpdate(Request $request, $id) {
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