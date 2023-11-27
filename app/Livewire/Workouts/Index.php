<?php
//
//namespace App\Livewire\Workouts;
//
//use Illuminate\Routing\Route;
//use Illuminate\Support\Facades\Auth;
//use Livewire\Component;
//use App\Models\Workouts;
//use Livewire\WithPagination as pagination;
//
//class Index extends Component
//{
//    use pagination;
//
//    public $page;
//    public $searchQuery = '';
//
//    public function mount($page = null, $request = null)
//    {
//        $this->page = $page;
//    }
//    public function render()
//    {
//        if ($this->page === 'dashboard') {
//            // Code specific to a particular route
//            // Get the currently authenticated user
//            $user = Auth::user();
//
//            // Fetch workouts added by the authenticated user
//
//            $workouts = Workouts::where('user_id', $user->id)->paginate(6);
//        } else {
//            // Alternative code for other routes
//            $workouts = Workouts::orderBy('created_at', 'desc')->paginate(6);
//        }
//
//
//        return view('livewire.workouts.index', [
//            'workouts' => $workouts,
//            'page' => $this->page
//        ]);
//    }
//}


namespace App\Livewire\Workouts;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Workouts;
use Livewire\WithPagination as pagination;

class Index extends Component
{
    use pagination;

    public $page;

    public function mount($page = null)
    {
        $this->page = $page;
    }

    public function render()
    {
        if ($this->page === 'dashboard') {
            $user = Auth::user();

            if ($user) {
                $workouts = Workouts::where('user_id', $user->id)
                    ->paginate(6);
            }
        } else {
            $workouts = Workouts::latest()->paginate(9);
        }

        return view('livewire.workouts.index', [
            'workouts' => $workouts,
            'page' => $this->page,
        ]);
    }
}
