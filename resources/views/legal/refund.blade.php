@php
    $title = 'Refund & Cancellation Policy';
    $description = 'How cancellations and refunds work for Tejal Digital website, software and maintenance projects.';
    $updated = '17 November 2026';
@endphp

@extends('legal.layout')

@section('legal')
    <section>
        <p>
            We want every client to feel safe paying us. This policy explains what happens if you need to cancel a
            project or a maintenance plan. If your accepted quote has different terms, the quote applies.
        </p>
    </section>

    <section>
        <h2>1. Cancelling before work starts</h2>
        <p>
            If you cancel before we have started work, we refund your advance in full, minus any third-party costs we
            already paid on your behalf (such as a domain, hosting or a paid plugin).
        </p>
    </section>

    <section>
        <h2>2. Cancelling during a project</h2>
        <ul>
            <li>You pay for the work completed up to the date you cancel in writing.</li>
            <li>Milestones that are already delivered and approved are not refundable.</li>
            <li>If you have paid more than the value of the work completed, we refund the difference, minus third-party costs.</li>
            <li>We hand over all completed work and files once the final amount is settled.</li>
        </ul>
    </section>

    <section>
        <h2>3. After the project is delivered</h2>
        <p>
            Once a project is completed, approved and live, payments for it are not refundable. If something is not
            working as agreed, tell us. We fix issues in our work as described in our
            <a href="{{ route('legal.terms') }}">Terms &amp; Conditions</a>.
        </p>
    </section>

    <section>
        <h2>4. Maintenance and support plans</h2>
        <ul>
            <li>You can cancel a maintenance plan at any time by email.</li>
            <li>The plan stays active until the end of the period you have paid for, and that period is not refunded.</li>
            <li>The plan does not renew after you cancel.</li>
        </ul>
    </section>

    <section>
        <h2>5. Third-party purchases</h2>
        <p>
            Domains, hosting, paid themes, plugins and other services bought from third parties are not refundable by
            us, because we cannot get that money back from the provider.
        </p>
    </section>

    <section>
        <h2>6. How to request a refund</h2>
        <p>
            Email <a href="mailto:{{ config('staticdata.email') }}">{{ config('staticdata.email') }}</a> with your name,
            project and the reason for cancelling. We confirm the amount within 3 working days, and approved refunds are
            sent to the original payment method within 7–10 working days.
        </p>
    </section>
@endsection
