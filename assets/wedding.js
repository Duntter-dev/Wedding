
function openEnvelope() {
    const envelope = document.querySelector('.envelope');

    envelope.classList.add('open');

    // wait for animation before redirect
    setTimeout(() => {
        window.location.href = "invitation.php"; // next page
    }, 300);
}
