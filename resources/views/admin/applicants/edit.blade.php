<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Candidate Information Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <form class="space-y-6" enctype="multipart/form-data">
                @csrf
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <h2 class="text-lg font-medium text-gray-900">Basic Information</h2>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 mt-4">
                        <div>
                            <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2">First Name <span class="text-red-500">*</span></label>
                            <input type="text" name="first_name" id="first_name" value="{{ $applicant->first_name }}" disabled placeholder="Enter your first name" class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                        </div>

                        <div>
                            <label for="last_name" class="block text-gray-700 text-sm font-bold mb-2">Last Name <span class="text-red-500">*</span></label>
                            <input type="text" id="last_name" value="{{ $applicant->last_name }}" disabled placeholder="Enter your last name" class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                        </div>

                        <div>
                            <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone <span class="text-red-500">*</span></label>
                            <input type="text" id="phone" value="{{ $applicant->phone }}" disabled placeholder="Enter your phone number" class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                        </div>

                        <div>
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email <span class="text-red-500">*</span></label>
                            <input type="email" id="email" value="{{ $applicant->email }}" disabled placeholder="Enter your email" class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address <span class="text-red-500">*</span></label>
                        <textarea id="address" disabled cols="30" rows="2" class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">{{ $applicant->address }}</textarea>
                    </div>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 mt-4">
                        <div>
                            <label for="dob" class="block text-gray-700 text-sm font-bold mb-2">Date of Birth <span class="text-red-500">*</span></label>
                            <input type="date" name="dob" id="dob" value="{{ old('dob', $applicant->dob) }}" disabled placeholder="Enter your date of birth" class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                            <p class="text-gray-700 text-sm font-semibold">{{ $applicant->age }}</p>
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Gender <span class="text-red-500">*</span></label>
                            <label>
                                <input type="radio" name="gender" value="1" {{ $applicant->gender == 1 ? 'checked':'' }} disabled/> Male
                            </label>
                            <label class="ml-4">
                                <input type="radio" name="gender" value="2" {{ $applicant->gender == 2 ? 'checked':'' }} disabled/> Female
                            </label>
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="residency" class="block text-gray-700 text-sm font-bold mb-2">Residency Status <span class="text-red-500">*</span></label>
                        <label>
                            <input type="radio" value="1" disabled {{ $applicant->residency == 1 ? 'checked':'' }}/> U.S. Citizen
                        </label>
                        <label class="ml-4">
                            <input type="radio" value="2" disabled {{ $applicant->residency == 2 ? 'checked':'' }}/> Green Card
                        </label>
                        <label class="ml-4">
                            <input type="radio" value="3" disabled {{ $applicant->residency == 3 ? 'checked':'' }}/> H1B
                        </label>
                        <label class="ml-4">
                            <input type="radio" value="4" disabled {{ $applicant->residency == 4 ? 'checked':'' }}/> CPT
                        </label>
                        <label class="ml-4">
                            <input type="radio" value="5" disabled {{ $applicant->residency == 5 ? 'checked':'' }}/> OPT
                        </label>
                        <label class="ml-4">
                            <input type="radio" value="6" disabled {{ $applicant->residency == 6 ? 'checked':'' }}/> Work Permit
                        </label>
                    </div>

                    <div class="mt-3">
                        <label for="residency_location" class="block text-gray-700 text-sm font-bold">Residency Location</label>
                        <p class="font-semibold text-sm">You are not U.S. citizen, state in details the timeline since you came to U.S.</p>
                        <table class="w-full">
                            <tr>
                                <td class="border font-semibold text-sm py-0.5 px-1 text-center">No.</td>
                                <td class="border font-semibold text-sm py-0.5 px-1">The States Where You Lived</td>
                                <td class="border font-semibold text-sm py-0.5 px-1 text-center">From - To</td>
                            </tr>
                            @foreach($applicant->residency_location as $location)
                            <tr>
                                <td class="border px-1 py-0.5 font-semibold text-sm p-y-0.5 px-1 text-center">{{ $loop->iteration }}</td>
                                <td class="border px-1 py-0.5">
                                    <input type="text" value="{{ $location['name'] }}" disabled class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                                </td>
                                <td class="border px-1 py-0.5">
                                    <input type="text" value="{{ $location['from_to'] }}" disabled class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>

                    <div class="sm:flex">
                        <div class="w-full sm:w-1/2 mt-4 sm:mr-2">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Clearance <span class="text-red-500">*</span></label>
                                <label>
                                    <input type="radio" name="clearance" value="1" {{ $applicant->clearance == 1 ? 'checked':'' }} disabled/> Yes
                                </label>
                                <label class="ml-4">
                                    <input type="radio" name="clearance" value="0" {{ $applicant->clearance === '0' ? 'checked':'' }} disabled/> NO
                                </label>
                            </div>

                            @if($applicant->clearance == 1)
                                <div class="mt-4">
                                    <label for="clearance_yes" class="block text-gray-700 text-sm font-bold mb-2">Please Specify Here <span class="text-red-500">*</span></label>
                                    <textarea name="clearance_yes" id="clearance_yes" cols="30" rows="2" disabled class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">{{ old('clearance_yes', $applicant->clearance_yes) }}</textarea>
                                </div>
                            @endif
                        </div>

                        <div class="w-full sm:w-1/2 mt-4 sm:ml-2">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Criminal Record <span class="text-red-500">*</span></label>
                                <label>
                                    <input type="radio" name="criminal_record" value="1" {{ $applicant->criminal_record == 1 ? 'checked':'' }} disabled/> Yes
                                </label>
                                <label class="ml-4">
                                    <input type="radio" name="criminal_record" value="0" {{ $applicant->criminal_record == '0' ? 'checked':'' }} disabled/> NO
                                </label>
                            </div>

                            @if($applicant->criminal_record == 1)
                                <div class="mt-4">
                                    <label for="criminal_record_yes" class="block text-gray-700 text-sm font-bold mb-2">Please Specify Here <span class="text-red-500">*</span></label>
                                    <textarea name="criminal_record_yes" id="criminal_record_yes" cols="30" rows="2" disabled class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">{{ old('criminal_record_yes', $applicant->criminal_record_yes) }}</textarea>
                                </div>
                            @endif
                        </div>
                    </div>

                    <h2 class="text-lg font-medium text-gray-900 my-4">Education Information</h2>

                    <table class="w-full">
                        <tr>
                            <td class="border font-semibold text-sm py-0.5 px-1 text-center">Degree</td>
                            <td class="border font-semibold text-sm py-0.5 px-1 text-center">Institution</td>
                            <td class="border font-semibold text-sm py-0.5 px-1 text-center">Add Major</td>
                            <td class="border font-semibold text-sm py-0.5 px-1 text-center">From - To</td>
                        </tr>
                        <tr>
                            <td class="border font-semibold text-sm py-0.5 px-1">Undergraduate</td>
                            <td class="border font-semibold text-sm py-0.5 px-1">
                                <input type="text" value="{{ $applicant->undergraduate_institution }}" disabled class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                            </td>
                            <td class="border font-semibold text-sm py-0.5 px-1">
                                <input type="text" value="{{ $applicant->undergraduate_major }}" disabled class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                            </td>
                            <td class="border font-semibold text-sm py-0.5 px-1">
                                <input type="text" value="{{ $applicant->undergraduate_from_to }}" disabled class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                            </td>
                        </tr>
                        <tr>
                            <td class="border font-semibold text-sm py-0.5 px-1">Graduate</td>
                            <td class="border font-semibold text-sm py-0.5 px-1">
                                <input type="text" value="{{ $applicant->graduate_institution }}" disabled class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                            </td>
                            <td class="border font-semibold text-sm py-0.5 px-1">
                                <input type="text" value="{{ $applicant->graduate_major }}" disabled class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                            </td>
                            <td class="border font-semibold text-sm py-0.5 px-1">
                                <input type="text" value="{{ $applicant->graduate_from_to }}" disabled class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                            </td>
                        </tr>
                        <tr>
                            <td class="border font-semibold text-sm py-0.5 px-1">PhD</td>
                            <td class="border font-semibold text-sm py-0.5 px-1">
                                <input type="text" value="{{ $applicant->phd_institution }}" disabled class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                            </td>
                            <td class="border font-semibold text-sm py-0.5 px-1">
                                <input type="text" value="{{ $applicant->phd_major }}" disabled class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                            </td>
                            <td class="border font-semibold text-sm py-0.5 px-1">
                                <input type="text" value="{{ $applicant->phd_from_to }}" disabled class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                            </td>
                        </tr>
                    </table>

                    <table class="w-full mt-4">
                        <tr>
                            <td class="border font-semibold text-sm py-0.5 px-1 text-center">Certification (if any)</td>
                            <td class="border font-semibold text-sm py-0.5 px-1 text-center">Year</td>
                        </tr>
                        @foreach($applicant->certifications as $certification)
                            <tr>
                                <td class="border font-semibold text-sm py-0.5 px-1 flex items-center">
                                    <span class="mr-2">#{{ $loop->iteration }}</span>
                                    <input type="text" value="{{ $certification['name'] }}" disabled class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                                </td>
                                <td class="border font-semibold text-sm py-0.5 px-1">
                                    <input type="text" value="{{ $certification['year'] }}" disabled class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    <h2 class="text-lg font-medium text-gray-900 mt-4">Skill Sets</h2>

                    <div class="mt-2">
                        <div class="flex flex-wrap">
                            @foreach($skills as $skill)
                                <div class="w-1/2">
                                    <input type="checkbox" name="skills[]" id="skill-{{ $skill->id }}" value="{{ $skill->id }}" disabled class="mr-2" @if(in_array($skill->id, $applicant->skills)) checked @endif>
                                    <label for="skill-{{ $skill->id }}">{{ $skill->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="comment" class="block text-gray-700 text-sm font-bold mb-2">Comment</label>
                        <textarea name="comment" id="comment" cols="30" rows="4" disabled class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0 read-only:bg-gray-100">{{ $applicant->comment }}</textarea>
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg" id="experience">
                    <h2 class="text-lg font-medium text-gray-900">Experience Information</h2>
                    <table class="w-full mt-2">
                        <tr>
                            <td class="border font-semibold text-sm py-0.5 px-1 text-center">Company</td>
                            <td class="border font-semibold text-sm py-0.5 px-1 text-center">Position</td>
                            <td class="border font-semibold text-sm py-0.5 px-1 text-center">From - To</td>
                            <td class="border font-semibold text-sm py-0.5 px-1 text-center">
                                <a class="text-white bg-gray-800 h-5 w-5 inline-block text-center cursor-pointer rounded-full" @click="addExperience">+</a>
                            </td>
                        </tr>
                        <tr v-for="(experience, index) in experiences" :key="index">
                            <td class="border font-semibold text-sm py-0.5 px-1">
                                <select v-model="experience.company_name" class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0">
                                    <option value="">Select Company</option>
                                    <option v-for="company in companies" :value="company.name">@{{ company.name }}</option>
                                </select>
                            </td>
                            <td class="border font-semibold text-sm py-0.5 px-1">
                                <input type="text" class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0" v-model="experience.position">
                            </td>
                            <td class="border font-semibold text-sm py-0.5 px-1">
                                <input type="text" class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-gray-200 focus:ring-0" v-model="experience.from_to">
                            </td>
                            <td class="border font-semibold text-sm py-0.5 px-1 text-center">
                                <a class="text-white bg-gray-500 h-5 w-5 inline-block text-center cursor-pointer rounded-full" @click="removeExperience(index)">-</a>
                            </td>
                        </tr>
                    </table>

                    <div class="flex mt-6">
                        <button type="button" @click="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Save
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <!-- Vue js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        var app = new Vue({
            el: '#experience',
            data: {
                companies: {!! json_encode($companies) !!},
                experiences: {!! json_encode($applicant->experiences) !!}
            },
            methods: {
                submit: function () {
                    let url = '{{ route('applicants.update', $applicant->id) }}';
                    let token = '{{ csrf_token() }}';
                    fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': token
                        },
                        body: JSON.stringify({
                            experiences: this.experiences
                        })
                    }).then(function (response) {
                        alert('Successfully updated.')
                    }).then(function (data) {

                    });
                },
                addExperience: function () {
                    this.experiences.push({
                        company_name: '',
                        position: '',
                        from_to: ''
                    });
                },
                removeExperience: function (index) {
                    this.experiences.splice(index, 1);
                }
            }
        });
    </script>
</x-app-layout>
