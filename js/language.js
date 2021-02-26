document.addEventListener("DOMContentLoaded", () => {
    document.getElementById('ua-select').onclick = function () {
        document.cookie = 'language=ua';
        location.reload();
    }

    document.getElementById('eng-select').onclick = function () {
        document.cookie = 'language=eng';
        location.reload();
    }
});