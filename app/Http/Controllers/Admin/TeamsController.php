<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUsersRequest;
use App\Http\Requests\Admin\UpdateUsersRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Http\Controllers\Traits\ImageableHelper;

class TeamsController extends Controller
{
    use FileUploadTrait;
    use ImageableHelper;
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (! Gate::allows('user_access')) {
        //     return abort(401);
        // }

        $teams = Team::all();

        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (! Gate::allows('user_create')) {
        //     return abort(401);
        // }

        // $roles = \App\Role::get()->pluck('title', 'id');

        return view('admin.teams.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if (! Gate::allows('user_create')) {
        //     return abort(401);
        // }
        $request  = $this->saveFiles($request);
        $team = Team::create($request->all());
        //$user->role()->sync(array_filter((array)$request->input('role')));

        return redirect()->route('admin.teams.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // if (! Gate::allows('user_edit')) {
        //     return abort(401);
        // }

        // $roles = \App\Role::get()->pluck('title', 'id');
        $team  = Team::findOrFail($id);

        return view('admin.teams.edit', compact('team'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // if (! Gate::allows('user_edit')) {
        //     return abort(401);
        // }
        //dd($request->except('photo_max_size,photo_max_width,photo_max_height'));
        $request  = $this->saveFiles($request);
        $team = Team::where('id', $id)->update(array('name' => $request['name'],'designation' => $request['designation'],'photo' => $request['photo'],'fb' => $request['fb'],'twitter' => $request['twitter'],'insta' => $request['insta'],'linkedin' => $request['linkedin']));
      //  $team->update($request->all());
       // $user->role()->sync(array_filter((array)$request->input('role')));

        return redirect()->route('admin.teams.index');
    }


    /**
     * Display User.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if (! Gate::allows('user_view')) {
        //     return abort(401);
        // }

        // $roles     = \App\Role::get()->pluck('title', 'id');
        // $notes     = \App\Note::where('user_id', $id)->get();
        // $documents = \App\Document::where('user_id', $id)->get();
        $documents      = Team::findOrFail($id);

        return view('admin.teams.show', compact( 'documents'));
    }


    /**
     * Remove User from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if (! Gate::allows('user_delete')) {
        //     return abort(401);
        // }

        $user = Invitation::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.teams.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        // if (! Gate::allows('user_delete')) {
        //     return abort(401);
        // }

        if ($request->input('ids')) {
            $entries = User::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
