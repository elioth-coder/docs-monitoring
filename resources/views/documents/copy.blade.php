<x-layout>
    <x-slot:head>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </x-slot:head>

    <x-header />
    <main class="mx-auto" style="width: 90%;">
        <x-search-form />
        <x-table :$documents />

        <div class="d-flex">
            <section class="w-100">
                <x-copy-form :$selected />
            </section>
            <section class="w-100">
                <x-info />
            </section>
        </div>
    </main>
    <x-footer />
    <x-slot:script>
        <script>
            async function deleteDocument(id) {
                let result = await Swal.fire({
                    title: "Delete this document?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#0d6efd",
                    cancelButtonColor: "#bb2d3b",
                    confirmButtonText: "Continue"
                });

                if (result.isConfirmed) {
                    document.querySelector(`#delete-document-${id} button`).click();
                }
            }
        </script>
    </x-slot:script>
</x-layout>
