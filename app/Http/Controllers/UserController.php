<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Contracts\ReviewRepositoryInterface;
use App\Repositories\Contracts\RateReviewRepositoryInterface;
use App\Repositories\Contracts\CollectionRepositoryInterface;
use App\Repositories\Contracts\ImageRepositoryInterface;
use App\Repositories\Contracts\RateReviewValRepositoryInterface;
use App\Repositories\Contracts\PlaceRepositoryInterface;
use App\Repositories\Contracts\CommentRepositoryInterface;
use App\Repositories\Contracts\FollowRepositoryInterface;
use App\Repositories\Contracts\NotificationRepositoryInterface;
use App\Http\Requests\UserUpdateRequest;
use App\Events\Notifications;
use Auth;
use Hash;
use Log;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(
        UserRepositoryInterface $userRepository
    ) {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $listuser = $this->userRepository->paginate();

        return view('backend.users.listprofile', ['listuser' => $listuser]);
    }

    public function edit($id)
    {
        $user = $this->userRepository->find($id);
        if (Auth::user()->level == config('const.roleAdmin')) {
            return view('backend.users.profile', compact('user'));
        } elseif (Auth::user()->level == config('const.roleUser') && Auth::user()->id == $id) {
            return view('frontend.user.edit-profile', compact('user'));
        } else {
            return redirect()->route('home');
        }
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $user = $this->userRepository->find($id);
        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $file->move('images/Upload', $file->getClientOriginalName());
            $linkimage = $file->getClientOriginalName();
        } else {
            $linkimage = $this->userRepository->updateavatar($id);
        }
        try {
            $dataUpdate = $request->only('name', 'email', 'add', 'phone');
            $dataUpdate['avatar'] = $linkimage;
            $dataUpdate['password'] = $request->newpassword;
            $result = $this->userRepository->update($dataUpdate, $id);
            if (Auth::user()->level == config('const.roleAdmin')) {
                return redirect()->action('UserController@index')
                ->with('status', trans('messages.successfull'));
            } elseif (Auth::user()->level == config('const.roleUser')) {
                return redirect()->route('home', Auth::user()->id)
                ->with('status', trans('messages.successfull'));
            }
        } catch (Exception $e) {
            Log::error($e);

            return back()->withErrors(trans('messages.updatefail'));
        }
    }

    public function destroy($id)
    {
        $user = $this->userRepository->find($id);
        if (!$user) {
            return view('errors.404');
        }
        try {
            $this->userRepository->delete($id);

            return redirect()->action('UserController@index')
                ->with('status', trans('messages.deletesuccessfully'));
        } catch (Exception $e) {
            Log::error($e);

            return redirect()->action('UsersController@index')
            ->withErrors(trans('messages.deletefailed'));
        }
    }

    public function editProfile(UserUpdateRequest $request, $id)
    {
        $user = $this->userRepository->find($id);
        // if (Hash::check($request->current_password, Auth::user()->password)) {
            if ($request->hasFile('avatar')) {
                $file = $request->avatar;
                $file->move('images/Upload', $file->getClientOriginalName());
                $linkimage = $file->getClientOriginalName();
            } else {
                $linkimage = $this->userRepository->updateavatar($id);
            }
            try {
                $dataUpdate = $request->only('name', 'email', 'add', 'phone');
                $dataUpdate['avatar'] = $linkimage;
                $dataUpdate['password'] = $request->newpassword;
                $result = $this->userRepository->update($dataUpdate, $id);
                if (Auth::user()->level == config('const.roleAdmin')) {
                    return redirect()->action('UserController@index')
                    ->with('status', trans('messages.successfull'));
                } elseif (Auth::user()->level == config('const.roleUser')) {
                    return redirect()->route('home')
                    ->with('status', trans('messages.successfull'));
                }
            } catch (Exception $e) {
                Log::error($e);

                return back()->withErrors(trans('messages.updatefail'));
            }
        // } else {
        //     $alert = ['error' => trans('Wrong pass!')];

        //     return back()->with($alert);
        // }
    }

    public function myWall($id)
    {
        
    }

    public function showCollection($id)
    {

    }

    public function follow(Request $request)
    {

    }

    public function unFollow(Request $request)
    {
        
    }
}
