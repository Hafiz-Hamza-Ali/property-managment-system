<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreTenantsRequest;
use App\Notifications\InvitationSend;
use App\Property;
use App\Http\Controllers\Controller;
use App\User;
use App\Invitation;

class InvitationController extends Controller
{

    /**
     * Display a listing of Tenants.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $invitations = Invitation::get();

        return view('admin.invitation.index', compact('invitations'));
    }

 
    /**
     * Remove Property from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $invitation = Invitation::findOrFail($id);
        $invitation->delete();
        $invitations = Invitation::get();

        return view('admin.invitation.index', compact('invitations'));
    }
    public function edit($id)
    {
        $invitations = Invitation::find($id);
        // $properties = \App\Property::get()->pluck('name', 'id');
        // $note       = Note::findOrFail($id);

        return view('admin.invitation.show', compact('invitations'));
    }

    /**
     * Update Note in storage.
     *
     * @param  \App\Http\Requests\UpdateNotesRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotesRequest $request, $id)
    {
        if (! Gate::allows('note_edit')) {
            return abort(401);
        }

        $note = Note::findOrFail($id);
        $note->update($request->all());

        return redirect()->route('admin.notes.index');
    }


    /**
     * Display Note.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if (! Gate::allows('note_view')) {
        //     return abort(401);
        // }

        $invitations = Invitation::get();

        return view('admin.invitation.index', compact('invitations'));
    }


    /**
     * Remove Note from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Delete all selected Note at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('note_delete')) {
            return abort(401);
        }

        if ($request->input('ids')) {
            $entries = Note::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


}
