<?php
$content = <<<EOF
<!-- Content Container -->
<div class="container">
    <br/>
    <br/>
    <br/>

    <div>
        <h1>User Stories</h1>
        <hr>

        <div>
            <h2>Guests</h2>
            <ul>
                <li>As a guest, I’d like to find out more information about the entrepreneurial center.</li>
                <li>As a guest, I’d like to register for an account.</li>
                <li>As a guest, I need to view links to EC social media web sites.</li>
                <li>As a guest, I need to view upcoming EC events on the calendar.</li>
            </ul>
        </div>
        <div>
            <h2>Registered Users (Including Pending Approval)</h2>
            <ul>
                <li>As a registered user, I need to be notified of upcoming EC events.</li>
                <li>As a registered user, I need to update my user profile, including my available skillset.</li>
            </ul>
        </div>
        <div>
            <h2>Approved Users</h2>
            <ul>
                <li>As an approved user, I need to request a meeting with an EC mentor.</li>
                <li>As an approved user, I need to request a new company.</li>
                <li>As an approved user, I need to let others know that I can be a resource.</li>
            </ul>
        </div>
        <div>
            <h2>Company Spokesperson</h2>
            <ul>
                <li>As a company spokesperson, I need to update both public and private information about the company.</li>
                <li>As a company spokesperson, I need to view and request available resources.</li>
                <li>As a company spokesperson, I need to view and approve requests from resources.</li>
                <li>As a company spokesperson, I need to collaborate with resources through chat and file sharing.</li>
                <li>As a company spokesperson, I need to schedule an available meeting room.</li>
            </ul>
        </div>
        <div>
            <h2>Resources</h2>
            <ul>
                <li>As a resource, I need to view companies requesting resources.</li>
                <li>As a resource, I need to send a request to be added to a company.</li>
                <li>As a resource, I need to approve requests to be added to a company.</li>
            </ul>
        </div>
        <div>
            <h2>Entrepreneurial Staff</h2>
            <ul>
                <li>As an EC staff member, I need to send out notifications to users.</li>
                <li>As an EC staff member, I need to add/edit EC events to the calendars.</li>
                <li>As an EC staff member, I need to view and approve requested user accounts.</li>
                <li>As an EC staff member, I need to view and approve requested companies.</li>
                <li>As an EC staff member, I need to approve requests for meetings with an EC mentor.</li>
            </ul>
        </div>
        <div>
            <h2>Administrator</h2>
            <ul>
                <li>As an administrator, I need to be able to enable and disable user accounts.</li>
                <li>As an administrator, I need to be able to add, edit, and archive companies.</li>
                <li>As an administrator, I need to be able to configure white-listed account requirements.</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Content Container -->
EOF;
require_once('display.php');
