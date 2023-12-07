$(document).ready(function() {
    // Mengambil elemen-elemen yang dibutuhkan
    var menuButton = $("#menuButton");
    var overlay = $("#myNav");
    var closeButton = $("#closeButton");

    // Menambahkan event handler untuk tombol menu
    menuButton.click(function() {
        overlay.addClass("overlay-active");
    });

    // Menambahkan event handler untuk tombol keluar pada overlay
    closeButton.click(function() {
        overlay.removeClass("overlay-active");
    });
});


$(document).ready(function() {
    // Mengambil elemen-elemen yang dibutuhkan
    var searchButton = $("#searchButton");
    var searchInput = $("#searchInput");
    var closeSearchButton = $("#closeSearchButton");

    // Menambahkan event handler untuk tombol pencarian
    searchButton.click(function() {
        searchInput.animate({ width: "150px" }, "fast");
        searchButton.hide();
        closeSearchButton.show();
        searchInput.focus(); // Focus on the search input
    });

    // Menambahkan event handler untuk tombol keluar dari inputan
    closeSearchButton.click(function() {
        searchInput.animate({ width: "0" }, "fast");
        closeSearchButton.hide();
        searchButton.show();
        searchInput.val(""); // Menghapus teks dalam input
    });
});


