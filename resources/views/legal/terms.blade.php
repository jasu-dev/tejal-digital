@php
    $title = 'Terms & Conditions';
    $description = 'The terms that apply when you use the Tejal Digital website or hire us for website and software development.';
    $updated = '17 November 2026';
@endphp

@extends('legal.layout')

@section('legal')
    <section>
        <p>
            These terms apply when you use this website or hire Tejal Digital (“we”, “us”) for website, software or
            maintenance work. Your written quote or proposal forms part of these terms. If the two differ, the quote or
            proposal you accepted applies.
        </p>
    </section>

    <section>
        <h2>1. Scope of work</h2>
        <ul>
            <li>Every project starts with a written quote or proposal describing the features, pages and timeline.</li>
            <li>Work that is not in the accepted quote is treated as additional work and quoted separately before we start it.</li>
            <li>Timelines assume we receive content, feedback and approvals on time. Delays on either side move the timeline accordingly.</li>
        </ul>
    </section>

    <section>
        <h2>2. Payments</h2>
        <ul>
            <li>Unless your quote says otherwise, projects need a 50% advance before work starts, and the balance before the website or software goes live or is handed over.</li>
            <li>Larger projects may be split into milestones, each invoiced as listed in the quote.</li>
            <li>Maintenance and support plans are billed in advance for the chosen period (monthly or yearly).</li>
            <li>Prices are exclusive of applicable taxes, which are added to the invoice where required.</li>
            <li>If a payment is overdue, we may pause work until it is cleared.</li>
        </ul>
    </section>

    <section>
        <h2>3. Your responsibilities</h2>
        <ul>
            <li>Provide the text, images, logos and other content for your project, and confirm you have the right to use them.</li>
            <li>Review work and share feedback within the agreed time.</li>
            <li>Keep login details we hand over safe once the project is delivered.</li>
        </ul>
    </section>

    <section>
        <h2>4. Revisions</h2>
        <p>
            Your quote lists the number of revision rounds included. Changes after approval of a stage, or beyond the
            included rounds, may be charged as additional work.
        </p>
    </section>

    <section>
        <h2>5. Third-party services</h2>
        <p>
            Domains, hosting, paid themes or plugins, payment gateways, SMS or email services and similar tools are
            provided by third parties. Their costs are billed separately unless included in your quote, and they are
            governed by the provider’s own terms. We are not responsible for outages or changes made by these providers.
        </p>
    </section>

    <section>
        <h2>6. Ownership</h2>
        <ul>
            <li>Once all payments for a project are cleared, you own the custom design and code we created for you.</li>
            <li>We keep ownership of general-purpose tools, libraries and know-how we use across projects. Open-source and third-party components stay under their own licences.</li>
            <li>We may show the finished work in our portfolio, unless you ask us not to in writing.</li>
        </ul>
    </section>

    <section>
        <h2>7. Support after launch</h2>
        <p>
            Bugs in the work we delivered that are reported within the support period stated in your quote are fixed
            free of charge. After that, ongoing updates, backups and improvements are covered by a maintenance plan or
            quoted separately.
        </p>
    </section>

    <section>
        <h2>8. Confidentiality</h2>
        <p>
            We keep your business information, login details and data confidential, and only use them to deliver your
            project. We are happy to sign a separate non-disclosure agreement on request.
        </p>
    </section>

    <section>
        <h2>9. Limitation of liability</h2>
        <p>
            We build and test our work carefully, but we cannot guarantee that a website or application will be free of
            every error or interruption. To the extent allowed by law, our total liability for any claim related to a
            project is limited to the amount you paid us for that project. We are not liable for indirect losses such as
            lost profits or data caused by third-party services, hosting failures or misuse.
        </p>
    </section>

    <section>
        <h2>10. Ending a project</h2>
        <p>
            Either side can end a project in writing. You pay for work completed up to that date, as described in our
            <a href="{{ route('legal.refund') }}">Refund &amp; Cancellation Policy</a>, and we hand over the completed
            work once those payments are cleared.
        </p>
    </section>

    <section>
        <h2>11. Use of this website</h2>
        <p>
            The content, design and code of this website belong to Tejal Digital. You may not copy or reuse them without
            our permission. Information on the website is for general guidance and does not form an offer until we send
            you a written quote.
        </p>
    </section>

    <section>
        <h2>12. Governing law</h2>
        <p>
            These terms are governed by the laws of India. Any dispute will be handled by the courts at Nagaur,
            Rajasthan. We will always try to resolve concerns through a conversation first.
        </p>
    </section>
@endsection
