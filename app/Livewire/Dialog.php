<?php

namespace App\Livewire;

use Livewire\Component;

class Dialog extends Component
{
    public function render()
    {
        return view('livewire.dialog');
    }


    public function destroy($id)
    {
      $adminUser = AdminUser::find($id);
      
      $adminUser->delete();

      return back()->with('success', 'admin user removed');
    } 
}
