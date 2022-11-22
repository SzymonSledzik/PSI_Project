<script>
    const searchButton = document.getElementById('search-button');
    const searchInput = document.getElementById('search-input');
    searchButton.addEventListener('click', () => {
        const inputValue = searchInput.value;
        alert(inputValue);
    });
</script>

<section class="container">
    <section class="row">
        <form action="https://www.google.com/search" method="get">
            <section class="col-sm-4">
                <section class="form-outline">
                    <input id="search-input" type="text" id="form1" class="form-control" />
                </section>
            </section>
            <section class="col-sm-4">
                <button id="search-button" type="submit" class="btn btn-primary" value="Search">
                    <i class="fas fa-search"></i>
                </button>
            </section>
        </form>
    </section>
</section>