<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MolhemoonInternship;
use App\Models\OthercompaniesInternship;


class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //get all internships from othercomanies table

    public function indexOthercompanyInternships()
    {
        $internships = OthercompaniesInternship::all(); // Fetch all internships from the database

        // Pass the fetched internships data to the view
        return view('frontend.internships.othercompaniesinternship', [
            'internships' => $internships
        ]);
    }

    public function indexMolhemoonInternships()
    {
        $internships = MolhemoonInternship::all(); // Fetch all internships from the database

        // Pass the fetched internships data to the view
        return view('frontend.internships.molhemoonInternship', [
            'internships' => $internships
        ]);
    }

    public function AdminIndexMolhemoonInternships()
    {
        $internships = MolhemoonInternship::all(); // Fetch all internships from the database

        // Pass the fetched internships data to the view
        return view('admin.internships.index', [
            'internships' => $internships
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createInternshipForAdmin(Request $request)
    {
        return view('admin.internships.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(MolhemoonInternship $internship)
    {
        return view('admin.internships.edit', compact('internship'));
    }

    public function update(Request $request, MolhemoonInternship $internship)
    {
        $request->validate([
            'title' => 'required',
            'experience_needed' => 'required',
            'career_level' => 'required',
            'education_level' => 'required',
            'salary' => 'required',
            'description' => 'required',
            'requirements' => 'required',
        ]);

        $internship->update($request->all());

        return redirect()->route('internship/list')->with('success', 'Internship updated successfully');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MolhemoonInternship $internship)
    {
        $internship->delete();

        return redirect()->route('internship/list')->with('success', 'Internship deleted successfully.');
    }

    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'experience_needed' => 'required|string',
            'career_level' => 'required|in:Entry Level,Mid Level,Senior Level,Executive',
            'education_level' => 'required|in:High School,Bachelor Degree,Master Degree,Ph.D.,Not Specified',
            'salary' => 'required|numeric',
            'description' => 'required|string',
            'requirements' => 'required|string',
        ]);

        // Create a new Internship record
        $internship = new MolhemoonInternship();
        $internship->title = $validatedData['title'];
        $internship->experience_needed = $validatedData['experience_needed'];
        $internship->career_level = $validatedData['career_level'];
        $internship->education_level = $validatedData['education_level'];
        $internship->salary = $validatedData['salary'];
        $internship->description = $validatedData['description'];
        $internship->requirements = $validatedData['requirements'];
        $internship->save();
        return redirect()->route('internship/list')->with('success', 'Internship deleted successfully.');
    }
    public function show($id)
    {
        $internship = MolhemoonInternship::findOrFail($id);
        return view('frontend.internships.molhemoonSingleIntern', compact('internship'));
    }
}
