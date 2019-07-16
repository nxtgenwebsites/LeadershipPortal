<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Model\Profile\Profile;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserRepository $user)
    {
        $users = $user->fetchUsers();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id, UserRepository $user)
    {
        $user = $user->updateUser($id, $request);
        session()->flash('success', 'User Updated Successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, UserRepository $user)
    {
        $user = $user->delete($id);
        session()->flash('success', 'User Deleted Successfully');
        return back();
    }


    public function unlock()
    {
        return view('auth.passwords.unlock');
    }

    public function report()
    {
        $token = auth()->user()->token_id;
        $token = '94byz7rkbizu5cr';
        $profile = Profile::select('first_name','last_name','raters_ttl','mgr_ttl','peer_ttl','dir_ttl','oth_ttl')->where('token_id', $token)->first();
        $selfSummary = DB::table('DSX_SELF_TTL-DATA as self')
                        ->join('DSX_Report_Options-Data as option','option.survey_id','self.survey_id')
                        ->where('token_id', $token)
                        ->first();

        $_360 = DB::table('DSX_360_TTL-DATA')
        ->selectRaw(" AVG(PQ) as PQ, AVG(CQ) as CQ, AVG(focused_thinking) as focused_thinking, AVG(problem_solving) as problem_solving,AVG(critical_thinking) as critical_thinking, AVG(decision_making) as decision_making, AVG(explanation) as explanation, AVG(EQ) as EQ, AVG(self_awareness) as self_awareness,AVG(self_regulation) as self_regulation, AVG(interpersonal_relationships) as interpersonal_relationships, AVG(empathy) as empathy, AVG(motivation) as motivation, AVG(LQ) as LQ, AVG(embodiment) as embodiment, AVG(inspiration) as inspiration, AVG(excellence) as excellence,AVG(empowerment) as empowerment,AVG(recognition) as recognition, AVG(BT) as BT ")
        ->where('token_id', $token)->groupby('token_id')->first();

        $self_avg = DB::table('DSX_SELF_AVG-DATA')->where('token_id', $token)->first();
        $_360_avg = DB::table('DSX_360_AVG-DATA')->where('token_id', $token)->first();

        $peersAvg = DB::table('VIEW_RATERS_AVG')->where('token_id',$token)->where('rater_type','peer')->first();
        dd($peersAvg);
        $managersAvg = DB::table('VIEW_RATERS_AVG')->where('token_id',$token)->where('rater_type','Manager/Supervisor')->first();
        $directsAvg = DB::table('VIEW_RATERS_AVG')->where('token_id',$token)->where('rater_type','Direct Report')->first();
        $othersAvg = DB::table('VIEW_RATERS_AVG')->where('token_id',$token)->where('rater_type','others')->first();

        $peer_oer = DB::table('DSX_360_TTL-DATA as d')->join('DSX_Raters-Data as r','r.token_id_360','d.token_id_360')
                            ->where('d.token_id', $token)->select('OER1','OER2','OER3','OER4')->where('rater_type', 'peer')->get();

        $manager_oer = DB::table('DSX_360_TTL-DATA as d')->join('DSX_Raters-Data as r','r.token_id_360','d.token_id_360')
                            ->where('d.token_id', $token)->select('OER1','OER2','OER3','OER4')->where('rater_type', 'Manager/Supervisor')->get();

        $direct_oer = DB::table('DSX_360_TTL-DATA as d')->join('DSX_Raters-Data as r','r.token_id_360','d.token_id_360')
                            ->where('d.token_id', $token)->select('OER1','OER2','OER3','OER4')->where('rater_type', 'Direct Report')->get();

        $other_oer = DB::table('DSX_360_TTL-DATA as d')->join('DSX_Raters-Data as r','r.token_id_360','d.token_id_360')
                            ->where('d.token_id', $token)->select('OER1','OER2','OER3','OER4')->where('rater_type', 'others')->get();

        // dd($direct_oer);
        return view('users.report',
            compact('profile','selfSummary','_360','self_avg','_360_avg','peersAvg','managersAvg','directsAvg','othersAvg','peer_oer','manager_oer','direct_oer','other_oer')
        );
    }

    public function selfReport()
    {
        $token = auth()->user()->token_id;
        $token = '94byz7rkbizu5cr';
        $profile = Profile::select('first_name','last_name','raters_ttl','mgr_ttl','peer_ttl','dir_ttl','oth_ttl')->where('token_id', $token)->first();
        $selfSummary = DB::table('dsx_self_ttl-data as self')
                        ->join('dsx_report_options-data as option','option.survey_id','self.survey_id')
                        ->where('token_id', $token)
                        ->first();
        return view('users.self-report', compact('profile','selfSummary'));
    }

}
