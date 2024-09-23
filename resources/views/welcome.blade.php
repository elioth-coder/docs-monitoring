<x-layout>
    <x-header />
    <main class="mx-auto" style="width: 90%;">
        <x-search-form />

        <div class="d-flex align-items-center justify-content-center" style="height: 250px;">
            <a href="/documents" class="btn btn-outline-dark">
                Go to Documents
                <i class="bi bi-file-text ms-1"></i>
            </a>
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
