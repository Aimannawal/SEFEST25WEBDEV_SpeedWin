<?php

namespace App\Http\Controllers;

use App\Models\Job_Applications;
use App\Models\Challenge_Registrations;
use App\Models\Challenge;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Basic Statistics
        $totalApplicants = Job_Applications::count();
        $reviewedApplications = Job_Applications::where('status', 'reviewed')->count();
        $totalChallenges = Challenge::where('active', true)->count();
        $totalParticipants = Challenge_Registrations::count();

        // Calculate percentage changes
        $lastMonthApplicants = Job_Applications::where('created_at', '>=', Carbon::now()->subMonth())->count();
        $previousMonthApplicants = Job_Applications::where('created_at', '>=', Carbon::now()->subMonths(2))
            ->where('created_at', '<', Carbon::now()->subMonth())
            ->count();
        $applicantsGrowth = $previousMonthApplicants > 0 
            ? round((($lastMonthApplicants - $previousMonthApplicants) / $previousMonthApplicants) * 100, 1)
            : 0;

        // Recent Applications
        $recentApplicants = Job_Applications::latest()
            ->take(5)
            ->get();

        // Active Challenges
        $recentChallenges = Challenge::where('active', true)
            ->latest()
            ->take(5)
            ->get()
            ->map(function($challenge) {
                $challenge->participants = Challenge_Registrations::count();
                return $challenge;
            });

        return view('admin.dashboard', compact(
            'totalApplicants',
            'reviewedApplications',
            'totalChallenges',
            'totalParticipants',
            'applicantsGrowth',
            'recentApplicants',
            'recentChallenges'
        ));
    }
}