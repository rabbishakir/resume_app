<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Applicant Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-[840px] mx-auto bg-white">
            <div class="pl-8 py-6">
                <div class="flex">
                    <div class="w-[350px]">
                        <div class="flex border-t-2 border-b-2 border-gray-400">
                            <div class="flex items-center bg-[#561614] text-center p-2">
                                <svg class="h-4 w-4" fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 395.71 395.71" xml:space="preserve">
                                    <g>
                                        <path d="M197.849,0C122.131,0,60.531,61.609,60.531,137.329c0,72.887,124.591,243.177,129.896,250.388l4.951,6.738
                                        c0.579,0.792,1.501,1.255,2.471,1.255c0.985,0,1.901-0.463,2.486-1.255l4.948-6.738c5.308-7.211,129.896-177.501,129.896-250.388
                                        C335.179,61.609,273.569,0,197.849,0z M197.849,88.138c27.13,0,49.191,22.062,49.191,49.191c0,27.115-22.062,49.191-49.191,49.191
                                        c-27.114,0-49.191-22.076-49.191-49.191C148.658,110.2,170.734,88.138,197.849,88.138z"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="text-gray-500 leading-4 p-2">{{ $applicant->address }}</div>
                        </div>
                        <div class="flex border-b-2 border-gray-400">
                            <div class="flex items-center bg-[#561614] text-center p-2">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 6V5C16 3.89543 16.8954 3 18 3C19.1046 3 20 3.89543 20 5V6M18.5 21C9.93959 21 3 14.0604 3 5.5C3 5.11378 3.01413 4.73086 3.04189 4.35173C3.07375 3.91662 3.08968 3.69907 3.2037 3.50103C3.29814 3.33701 3.4655 3.18146 3.63598 3.09925C3.84181 3 4.08188 3 4.56201 3H7.37932C7.78308 3 7.98496 3 8.15802 3.06645C8.31089 3.12515 8.44701 3.22049 8.55442 3.3441C8.67601 3.48403 8.745 3.67376 8.88299 4.05321L10.0491 7.26005C10.2096 7.70153 10.2899 7.92227 10.2763 8.1317C10.2643 8.31637 10.2012 8.49408 10.0942 8.64506C9.97286 8.81628 9.77145 8.93713 9.36863 9.17882L8 10C9.2019 12.6489 11.3501 14.7999 14 16L14.8212 14.6314C15.0629 14.2285 15.1837 14.0271 15.3549 13.9058C15.5059 13.7988 15.6836 13.7357 15.8683 13.7237C16.0777 13.7101 16.2985 13.7904 16.74 13.9509L19.9468 15.117C20.3262 15.255 20.516 15.324 20.6559 15.4456C20.7795 15.553 20.8749 15.6891 20.9335 15.842C21 16.015 21 16.2169 21 16.6207V19.438C21 19.9181 21 20.1582 20.9007 20.364C20.8185 20.5345 20.663 20.7019 20.499 20.7963C20.3009 20.9103 20.0834 20.9262 19.6483 20.9581C19.2691 20.9859 18.8862 21 18.5 21ZM16.5 9H19.5C19.9659 9 20.1989 9 20.3827 8.92388C20.6277 8.82239 20.8224 8.62771 20.9239 8.38268C21 8.19891 21 7.96594 21 7.5C21 7.03406 21 6.80109 20.9239 6.61732C20.8224 6.37229 20.6277 6.17761 20.3827 6.07612C20.1989 6 19.9659 6 19.5 6H16.5C16.0341 6 15.8011 6 15.6173 6.07612C15.3723 6.17761 15.1776 6.37229 15.0761 6.61732C15 6.80109 15 7.03406 15 7.5C15 7.96594 15 8.19891 15.0761 8.38268C15.1776 8.62771 15.3723 8.82239 15.6173 8.92388C15.8011 9 16.0341 9 16.5 9Z"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="text-gray-500 leading-4 p-2">{{ $applicant->phone }}</div>
                        </div>
                        <div class="flex border-b-2 border-gray-400">
                            <div class="flex items-center bg-[#561614] text-center p-2">
                                <svg class="h-4 w-4" viewBox="0 -2.5 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -922.000000)" fill="#ffffff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path d="M294,774.474 L284,765.649 L284,777 L304,777 L304,765.649 L294,774.474 Z M294.001,771.812 L284,762.981 L284,762 L304,762 L304,762.981 L294.001,771.812 Z" id="email-[#1572]">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="text-gray-500 leading-4 p-2">{{ $applicant->email }}</div>
                        </div>
                    </div>
                    <div class="bg-[#561614] text-white p-6 w-full border-b-[12px] border-gray-800">
                        <h3 class="text-2xl font-bold uppercase">{{ $applicant->first_name . ' ' . $applicant->last_name }}</h3>
                        <p>
                            @if($applicant->residency==1)
                                US CITIZEN
                                @if($applicant->clearance==1)
                                    (ACTIVE PUBLIC TRUST CLEARANCE)
                                @endif
                            @elseif($applicant->residency==2)
                                GREEN CARD
                            @endif
                        </p>
                    </div>
                </div>

                <div class="flex text-gray-600 mt-4">
                    <div class="w-[375px] mr-10">
                        <!-- Education -->
                        <h3 class="text-gray-800 uppercase leading-8 font-bold border-b-2 border-gray-300 font-sans tracking-wider mb-3">Education</h3>

                        @if($applicant->undergraduate_institution && $applicant->undergraduate_major && $applicant->undergraduate_from_to)
                            <!-- Education Item -->
                            <div class="mb-2">
                                <h4 class="leading-6 font-bold">{{ $applicant->undergraduate_institution }}</h4>
                                <p class="leading-4">{{ $applicant->undergraduate_major }}</p>
                                <p class="leading-4">{{ $applicant->undergraduate_from_to }}</p>
                            </div>
                        @endif

                        @if($applicant->graduate_institution && $applicant->graduate_major && $applicant->graduate_from_to)
                            <!-- Education Item -->
                            <div class="mb-2">
                                <h4 class="leading-6 font-bold">{{ $applicant->graduate_institution }}</h4>
                                <p class="leading-4">{{ $applicant->graduate_major }}</p>
                                <p class="leading-4">{{ $applicant->graduate_from_to }}</p>
                            </div>
                        @endif

                        @if($applicant->phd_institution && $applicant->phd_major && $applicant->phd_from_to)
                            <!-- Education Item -->
                            <div class="mb-2">
                                <h4 class="leading-6 font-bold">{{ $applicant->phd_institution }}</h4>
                                <p class="leading-4">{{ $applicant->phd_major }}</p>
                                <p class="leading-4">{{ $applicant->phd_from_to }}</p>
                            </div>
                        @endif
                    </div>
                    <div class="w-full mt-3 pr-10">
                        <!-- Professional Summary -->
                        <h3 class="text-gray-800 uppercase leading-8 font-bold border-b-2 border-gray-300 font-sans tracking-wider mb-3">Professional Summary</h3>
                        <p class="leading-6">Software Test Engineer with 3+ years of experience in Manual and Automation Testing. Experienced in creating Test Plans, Test Cases, Test Scenarios, Test Scripts, Test Reports, Test Metrics, Test Data, Test Estimations, and Test Environment Setup. Experienced in Functional, Integration, Backend, Regression, Smoke, Black box, GUI, UAT, and Cross Browser Testing. Experienced in Agile and Waterfall methodologies. Experienced in using Selenium
                            WebDriver, TestNG, JUnit, Cucumber, JMeter, Postman, Maven, Jenkins, Docker, AWS, JMeter, Postman, Git, GitHub, Jira, and HP ALM.</p>

                        <!-- Skills -->
                        <h3 class="text-gray-800 uppercase leading-8 font-bold border-b-2 border-gray-300 font-sans tracking-wider mb-3">Skills</h3>
                        <div class="flex mb-3">
                            <div class="w-1/2 ">
                                <ul class="pl-6">
                                    <li class="list-disc mb-0.5">
                                        <span class="font-bold">Languages:</span>
                                        <span class="font-normal">Java, SQL</span>
                                    </li>
                                    <li class="list-disc mb-0.5">
                                        <span class="font-bold">Testing Methods:</span>
                                        <span class="font-normal">Functional, Integration, Backend, Regression, Smoke, Black box, GUI, UAT</span>
                                    </li>
                                    <li class="list-disc mb-0.5">
                                        <span class="font-bold">Databases:</span>
                                        <span class="font-normal">SQL, Server</span>
                                    </li>
                                    <li class="list-disc mb-0.5">
                                        <span class="font-bold">Test Management/Bug Tracking Tools:</span>
                                        <span class="font-normal">Jira,HP ALM</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-1/2">
                                <ul class="pl-6">
                                    <li class="list-disc mb-0.5">
                                        <span class="font-bold">Automation Tools:</span>
                                        <span class="font-normal">Selenium WebDriver, TestNG, JUnit, Cucumber, JMeter, Postman</span>
                                    </li>
                                    <li class="list-disc mb-0.5">
                                        <span class="font-bold">Version Control Tools:</span>
                                        <span class="font-normal">Git, GitHub</span>
                                    </li>
                                    <li class="list-disc mb-0.5">
                                        <span class="font-bold">IDE:</span>
                                        <span class="font-normal">Eclipse, IntelliJ IDEA</span>
                                    </li>
                                    <li class="list-disc mb-0.5">
                                        <span class="font-bold">Other</span>
                                        <span class="font-normal">Maven, Jenkins, Docker, AWS, JMeter, Postman</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Experience -->
                        <h3 class="text-gray-800 uppercase leading-8 font-bold border-b-2 border-gray-300 font-sans tracking-wider mb-3">Experience</h3>

                        @foreach($applicant->experiences as $experience)
                            <!-- Experience Item -->
                            <div class="mb-4">
                                <h4 class="leading-6 uppercase font-bold">{{ $experience->position }}</h4>
                                <p class="leading-4 italic mb-2">{{ $experience->company_name }} | {{ $experience->from_to }}</p>
                                <ul class="pl-6">
                                    <li class="list-disc">Developed and maintained software applications for the US Army</li>
                                    <li class="list-disc">Worked with a team of 5 developers to develop and maintain software applications</li>
                                    <li class="list-disc">Worked with a team of 5 developers to develop and maintain software applications</li>
                                </ul>
                            </div>
                        @endforeach

                        <!-- Certifications -->
                        <h3 class="text-gray-800 uppercase leading-8 font-bold border-b-2 border-gray-300 font-sans tracking-wider mb-3">Certifications</h3>
                        <ul class="pl-6">
                            @foreach($applicant->certifications as $certification)
                                <li class="list-disc">{{ $certification['name'] }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
