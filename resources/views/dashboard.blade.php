@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('content')
<div style="max-width: 800px; margin: 2rem auto;">
    <div style="background: var(--surface); padding: 2.5rem; border-radius: var(--radius); border: 1px solid var(--border); box-shadow: var(--shadow);">
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 2rem; flex-wrap: gap;">
            <div>
                <h1 style="font-size: 1.75rem; font-weight: 700; margin-bottom: 0.5rem;">
                    Welcome, {{ auth()->user()->name }}! 👋
                </h1>
                <p style="color: var(--text-muted);">
                    Welcome to the Student Grievance Redressal Portal.
                </p>
            </div>
            <span style="background: #eef2ff; color: #4f46e5; padding: 0.35rem 0.85rem; border-radius: 9999px; font-weight: 600; font-size: 0.85rem; text-transform: uppercase;">
                Role: {{ auth()->user()->role }}
            </span>
        </div>

        <div style="background: var(--background); padding: 1.5rem; border-radius: 8px; border: 1px solid var(--border); margin-bottom: 2rem;">
            <h2 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 1rem; color: var(--text-main);">
                Account Overview
            </h2>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <div>
                    <span style="display: block; font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase; font-weight: 600;">Student Name</span>
                    <span style="font-size: 1rem; font-weight: 500;">{{ auth()->user()->name }}</span>
                </div>
                <div>
                    <span style="display: block; font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase; font-weight: 600;">Email Address</span>
                    <span style="font-size: 1rem; font-weight: 500;">{{ auth()->user()->email }}</span>
                </div>
                <div>
                    <span style="display: block; font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase; font-weight: 600;">Account Role</span>
                    <span style="font-size: 1rem; font-weight: 500;">{{ ucfirst(auth()->user()->role) }}</span>
                </div>
                <div>
                    <span style="display: block; font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase; font-weight: 600;">Registered Since</span>
                    <span style="font-size: 1rem; font-weight: 500;">{{ auth()->user()->created_at->format('M d, Y') }}</span>
                </div>
            </div>
        </div>

        <div style="background: #ecfdf5; border: 1px solid #a7f3d0; padding: 1.25rem; border-radius: 8px; color: #065f46;">
            <strong>Stage 2 Complete:</strong> Student authentication is now fully connected! You can register, log in, view this dashboard, and log out.
        </div>
    </div>
</div>
@endsection
