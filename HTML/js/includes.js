(function () {
  async function loadPartial(element) {
    var url = element.getAttribute('data-include');
    if (!url) return;

    try {
      var response = await fetch(url);
      if (!response.ok) return;
      var html = await response.text();
      element.insertAdjacentHTML('beforebegin', html);
      element.remove();
    } catch (error) {
      console.warn('Could not load partial:', url);
    }
  }

  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[data-include]').forEach(loadPartial);
  });
})();
