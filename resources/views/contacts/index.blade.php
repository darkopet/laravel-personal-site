<!DOCTYPE html>
<x-layout>
    <!--Section: Contact v.2-->
    <section class="mb-4">
        <style></style>

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact Darko</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact me directly. I'll be right there!
        </p>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach (\App\Models\Contact::all() as $contact)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="text-sm font-medium text-gray-900">
                                                <a href="/contacts/{{ $contact->slug }}">
                                                    {{ $contact->title }}
                                                </a>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="/contacts/{{ $contact->id }}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                                    </td> -->
                                        <form method="POST" action="/contact" enctype="multipart/form-data">
                                            @csrf
                                            <x-form.input name="Your name" required />
                                            <x-form.input name="Your email" required />
                                            <x-form.input name="Subject" type="sentence" required />
                                            <x-form.textarea name="Message" required />
                                            <x-form.button>Send</x-form.button>
                                        </form>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <form method="POST" action="/contacts/{{ $contact->id }}">
                                            @csrf
                                            @method('DELETE')

                                            <button class="text-xs text-gray-400">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</x-layout>