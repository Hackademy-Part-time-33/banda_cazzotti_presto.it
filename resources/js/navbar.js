import 'bootstrap';
import './bootstrap';
document.getElementById('searchButton').addEventListener('click', function () {
    const searchInput = document.getElementById('searchInput');

    if (searchInput.classList.contains('expanded') && searchInput.value.trim() !== '') {
        document.getElementById('searchForm').submit();
    }
    else {
        searchInput.classList.toggle('expanded');
        searchInput.focus(); // Facoltativo: imposta il focus sul campo input quando si espande
    }
});
