@extends('layout')
@section('title', 'UPSA Alumni Connect')

@section('content')

<div>
    <header class="text-upsaBlue text-center py-6 px-10">
        <h1 class="text-3xl font-bold">Welcome to UPSA Global Alumni Association</h1>
    </header>
</div>


<div class="container mx-auto py-4 max-w-3xl">
    <img src="rss/about_img.jpg" alt="UPSA Global Alumni Association" class="mb-8 mx-auto rounded-lg shadow-md">
    <section class="bg-white shadow-md rounded-lg p-8">
        <h2 class="text-2xl font-bold mb-4">Our Mission and Values</h2>
        <p class="mb-4">At UPSA Global Alumni Association, we unite alumni worldwide to continue the lifelong journey
            that began at our alma mater. Rooted in integrity, respect, and service, we strive to inspire and empower
            our members to make meaningful contributions to their communities and beyond.</p>
        <p class="mb-4">Our core values of openness, relevance, impact, and collaboration guide us in fostering
            connections, providing valuable experiences, and effecting positive change. We believe that by upholding
            these values, we can create a vibrant community of alumni dedicated to personal growth and collective
            success.</p>
    </section>
    <section class="mt-8 bg-white shadow-md rounded-lg p-8">
        <h2 class="text-2xl font-bold mb-4">Our History and Milestones</h2>
        <p class="mb-4">The UPSA Global Alumni Association has evolved over the years, driven by the shared
            experiences and aspirations of our members. From humble beginnings to global recognition, our journey is
            marked by significant milestones:</p>
        <ul class="list-disc ml-8">
            <li class="mb-2">Establishment of the Institute of Professional Studies (IPS) as a tertiary institution
                in 1999, laying the foundation for UPSA.</li>
            <li class="mb-2">Granting of a Presidential Charter in 2008, elevating UPSA to a full-fledged university
                and igniting alumni pride.</li>
            <li class="mb-2">Inclusion of alumni representation on the University Council in 2009, marking a pivotal
                moment in alumni involvement.</li>
            <li class="mb-2">Recognition of alumni contributions through academic prizes, awards, and fundraising
                initiatives, strengthening ties between alumni and the university.</li>
            <li class="mb-2">Renaming of the association to UPSA Global Alumni Association in 2020, reflecting its
                global reach and impact.</li>
        </ul>
    </section>
</div>


@endsection
