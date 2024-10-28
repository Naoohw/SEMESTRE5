document.addEventListener("DOMContentLoaded", function () {
    const avatars = [
          "AVATAR1.png", 
        "AVATAR2.png", 
        "AVATAR3.png", 
        "AVATAR4.png", 
        "AVATAR5.png", 
        "AVATAR6.png",
        "AVATAR7.png",
        "AVATAR8.png",
        "AVATAR9.png",
        "AVATAR10.png"
    ];

    // Seleccionar avatar aleatorio
    const randomAvatar = avatars[Math.floor(Math.random() * avatars.length)];

    // Asignar avatar al campo oculto y mostrarlo
    document.getElementById("avatar").value = randomAvatar;
    document.getElementById("avatarPreview").innerHTML = `<img src="avatars/${randomAvatar}" alt="Avatar" width="100">`;
});
