document.addEventListener('DOMContentLoaded', function () {
    // Load the navigation bar into the container
    var navbarContainer = document.getElementById('navbarContainer');
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'navbar.html', true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        navbarContainer.innerHTML = xhr.responseText;
      }
    };
    xhr.send();
  });