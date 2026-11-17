@php
    $title = 'Privacy Policy';
    $description = 'How Tejal Digital collects, uses and protects the information you share through our website and enquiry forms.';
    $updated = '17 November 2026';
@endphp

@extends('legal.layout')

@section('legal')
    <section>
        <p>
            This Privacy Policy explains what information Tejal Digital (“we”, “us”) collects when you visit
            <a href="@siteUrl('/')">tejaldigital.in</a> or contact us, why we collect it, and the choices you have.
            We follow the Digital Personal Data Protection Act, 2023 and other applicable Indian law.
        </p>
    </section>

    <section>
        <h2>1. Information you give us</h2>
        <p>When you fill in our contact form or quote popup, we collect:</p>
        <ul>
            <li>Your first and last name</li>
            <li>Email address and phone number</li>
            <li>The service you are interested in and your message</li>
        </ul>
        <p>
            If you contact us by email, phone or WhatsApp, we also keep that conversation so we can reply and
            follow up on your project.
        </p>
    </section>

    <section>
        <h2>2. Information collected automatically</h2>
        <p>When you browse our website, we record basic visit information to understand how the site is used:</p>
        <ul>
            <li>Pages you view and when you view them</li>
            <li>The website or search engine that referred you, and campaign tags in the link (UTM parameters)</li>
            <li>Device type, browser and operating system</li>
            <li>IP address and, where available, your country</li>
        </ul>
        <p>
            When you submit an enquiry, we link it to this visit information (for example, the page you came
            from) so we know which parts of our website are helpful.
        </p>
    </section>

    <section>
        <h2>3. Cookies and analytics</h2>
        <ul>
            <li>
                <strong>Essential cookies</strong> keep your session working and protect our forms from misuse.
                The website cannot work properly without them.
            </li>
            <li>
                <strong>Google Analytics</strong> sets cookies to help us measure visits and enquiries. Google
                processes this data under its own privacy policy. You can opt out with the
                <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics opt-out add-on</a>
                or by blocking cookies in your browser.
            </li>
        </ul>
    </section>

    <section>
        <h2>4. How we use your information</h2>
        <ul>
            <li>To reply to your enquiry and prepare a quote or proposal</li>
            <li>To plan, deliver and support projects you hire us for</li>
            <li>To understand which pages and channels bring visitors, and improve the website</li>
            <li>To keep the website and our forms secure and free of spam</li>
        </ul>
        <p>We do not sell your personal information, and we do not send you marketing messages without your consent.</p>
    </section>

    <section>
        <h2>5. Who we share it with</h2>
        <p>We only share information with services we need to run our business, such as:</p>
        <ul>
            <li>Our website hosting provider</li>
            <li>Google Analytics, for website statistics</li>
            <li>Email, phone and WhatsApp services we use to talk to you</li>
        </ul>
        <p>We may also disclose information when the law requires it.</p>
    </section>

    <section>
        <h2>6. How long we keep it</h2>
        <ul>
            <li>Website visit records, including IP addresses, are deleted automatically after 12 months.</li>
            <li>
                Enquiries and project communication are kept for as long as needed to work with you and to meet
                our accounting and legal obligations.
            </li>
        </ul>
    </section>

    <section>
        <h2>7. Keeping it safe</h2>
        <p>
            Our website uses HTTPS encryption, and access to enquiries is limited to authorised people. No method of
            transmission over the internet is completely secure, but we take reasonable steps to protect your data.
        </p>
    </section>

    <section>
        <h2>8. Your rights</h2>
        <p>You can ask us to:</p>
        <ul>
            <li>Tell you what personal information we hold about you</li>
            <li>Correct or update it</li>
            <li>Delete it, where we are not required to keep it</li>
            <li>Stop using it for a purpose you previously agreed to</li>
        </ul>
        <p>
            Email <a href="mailto:{{ config('staticdata.email') }}">{{ config('staticdata.email') }}</a> and we will
            respond within 30 days. You can also raise any privacy concern with us at the same address.
        </p>
    </section>

    <section>
        <h2>9. Children</h2>
        <p>Our services are meant for businesses. We do not knowingly collect information from children under 18.</p>
    </section>

    <section>
        <h2>10. Changes to this policy</h2>
        <p>If we change this policy, we will update the date at the top of this page.</p>
    </section>
@endsection
