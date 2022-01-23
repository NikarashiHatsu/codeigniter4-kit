import SimpleLightbox from 'simplelightbox';

window.onload = function() {
    new SimpleLightbox('.gallery a', {
        alertError: false,
        fileExt: 'jpg|png|gif|jpeg',
    });
}