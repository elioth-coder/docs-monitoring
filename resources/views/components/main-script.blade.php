<script>
    function toggleCheck(el) {
        let checkboxes = document.querySelectorAll(`.hide-columns [type="checkbox"]`);
        let label = el.nextElementSibling;
        label.textContent = (el.checked) ? 'SHOW COLUMNS' : 'HIDE COLUMNS';

        if (checkboxes.length) {
            checkboxes.forEach(checkbox => {
                if (el.checked) {
                    if (!checkbox.checked)
                        checkbox.click();
                } else {
                    if (checkbox.checked)
                        checkbox.click();
                }
            });
        }
    }

    function toggleColumn(el) {
        let cells = document.querySelectorAll(`[data-column="${el.value}"]`);

        if (cells.length) {
            cells.forEach(cell => cell.style.display = (el.checked) ? 'none' : 'table-cell');
        }

        updatePrintReportQueryString();
        updatePageLinksQueryString();
    }

    function getQueryStringForHiddenColumns() {
        let checkboxes = document.querySelectorAll(`.hide-columns [type="checkbox"][name]`);
        let queryStrings = [];

        if (checkboxes.length) {
            queryStrings =
                Array.from(checkboxes)
                .filter(checkbox => checkbox.checked)
                .map(checkbox => `hidden_columns[]=${checkbox.value}`);
        }

        return queryStrings.join("&");
    }

    function updatePageLinksQueryString() {
        let pageLinks = document.querySelectorAll('a.page-link');

        pageLinks.forEach(pageLink => {
            let [base, q] = pageLink.href.split("?");
            let hiddenColumns = getQueryStringForHiddenColumns();
            let parsedUrl = url.parse(pageLink.href);
            let pathname = parsedUrl.pathname;
            let href = "";

            if (q) {
                let parsed = queryString.parse(q)
                let queryStrings = [];

                for (let key in parsed) {
                    if(key.search('hidden_columns') < 0) {
                        queryStrings.push(`${key}=${parsed[key]}`);
                    }
                }

                href = pathname + "?" + queryStrings.join("&") + "&" + hiddenColumns;
            } else {
                href = pathname + "?" + hiddenColumns;
            }

            pageLink.href = encodeURI(href);
        });
    }

    function updatePrintReportQueryString() {
        let printReportButton = document.getElementById('print-report');
        let [base, q] = printReportButton.href.split("?");
        let hiddenColumns = getQueryStringForHiddenColumns();
        let parsedUrl = url.parse(printReportButton.href);
        let pathname = parsedUrl.pathname;
        let href = "";

        if (q) {
            let parsed = queryString.parse(q)
            let queryStrings = [];

            for (let key in parsed) {
                if(key.search('hidden_columns') < 0) {
                    queryStrings.push(`${key}=${parsed[key]}`);
                }
            }

            href = pathname + "?" + queryStrings.join("&") + "&" + hiddenColumns;
        } else {
            href = pathname + "?" + hiddenColumns;
        }

        printReportButton.href = encodeURI(href);
    }

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

    window.onload = function(){
        let q = location.search;
        let parsed = queryString.parse(q);
        let hidden_columns = parsed['hidden_columns[]'] ?? [];

        if(hidden_columns.length) {
            hidden_columns.forEach(column => {
                document.querySelector(`#${column}_checkbox`).click();
            });
        }

    };

</script>
