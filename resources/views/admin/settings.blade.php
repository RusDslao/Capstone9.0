@extends('layouts.admin')

@section('content')


        <div class="container mt-6">
            <div class="container mt-5">
            <h2 class="mb-4 text-primary">Settings Management</h2>
            <p class="mb-4">Manage your account settings including password changes and enable two-factor authentication for added security.</p>
            
            <!-- Settings Management Tabs -->
            <ul class="nav nav-tabs mb-4" id="settingsTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="change-password-tab" data-bs-toggle="tab" href="#changePassword" role="tab" aria-controls="changePassword" aria-selected="true">Change Password</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="two-factor-auth-tab" data-bs-toggle="tab" href="#twoFactorAuth" role="tab" aria-controls="twoFactorAuth" aria-selected="false">Two-Factor Authentication</a>
                </li>
            </ul>
        
            <!-- Tab Content -->
            <div class="tab-content" id="settingsTabContent">
                <!-- Change Password Tab -->
                <div class="tab-pane fade show active" id="changePassword" role="tabpanel" aria-labelledby="change-password-tab">
                    <div class="bg-white shadow-sm p-4 rounded border border-light">
                        <h3 class="h5 mb-4 text-secondary">Change Password</h3>
                        <form id="changePasswordForm">
                            <div class="mb-3">
                                <label for="currentPassword" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="currentPassword" required>
                            </div>
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="newPassword" required>
                            </div>
                            <div class="mb-3">
                                <label for="confirmNewPassword" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirmNewPassword" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </form>
                    </div>
                </div>
        
                <!-- Two-Factor Authentication Tab -->
                <div class="tab-pane fade" id="twoFactorAuth" role="tabpanel" aria-labelledby="two-factor-auth-tab">
                    <div class="bg-white shadow-sm p-4 rounded border border-light">
                        <h3 class="h5 mb-4 text-secondary">Two-Factor Authentication</h3>
                        <p class="mb-4">Enhance the security of your account by enabling two-factor authentication (2FA). Follow the steps below to set it up.</p>
                        
                        <div id="twoFactorAuthContent">
                            <form id="twoFactorAuthForm">
                                <div class="mb-3">
                                    <label for="enable2FA" class="form-label">Enable Two-Factor Authentication</label>
                                    <select class="form-select" id="enable2FA" required>
                                        <option value="">Select an option</option>
                                        <option value="email">Email</option>
                                        <option value="sms">SMS</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Settings</button>
                            </form>
                            
                            <div id="2FAInstructions" class="mt-4">
                                <p>Follow the instructions for the selected 2FA method to complete the setup:</p>
                                <ul>
                                    <li><strong>Email:</strong> Check your email for a verification code and follow the instructions to complete the setup.</li>
                                    <li><strong>SMS:</strong> Enter your phone number to receive a verification code via SMS.</li>
                                    <li><strong>Authenticator App:</strong> Scan the QR code provided with your authenticator app and enter the generated code to complete the setup.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
