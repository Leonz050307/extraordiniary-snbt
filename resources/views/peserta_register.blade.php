<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Daftar Peserta - Extraordinary CBT</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
    .card { max-width:420px; margin:6vh auto; padding:2rem; border-radius:8px; box-shadow:0 6px 18px rgba(0,0,0,0.08); background:#fff }
    .field { margin-bottom:0.75rem }
    .field input { width:100%; padding:0.6rem 0.75rem; border:1px solid #d1d5db; border-radius:6px }
    .btn { display:inline-block; background:#317EFB; color:#fff; padding:0.6rem 1rem; border-radius:6px; border:none }
    .muted { color:#6b7280; font-size:0.9rem }
  </style>
</head>
<body style="background:#f3f4f6; font-family:Inter,ui-sans-serif,system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial">
  <div class="card">
    <h2 style="margin:0 0 0.5rem">Daftar Peserta</h2>
    <p class="muted">Gunakan formulir ini untuk mendaftar. Jika sudah punya akun gunakan halaman masuk peserta.</p>

    <div id="message" style="margin:0.5rem 0;color:green"></div>

    <form id="registerForm">
      <div class="field"><input name="no_ujian" placeholder="No Ujian" required></div>
      <div class="field"><input name="nama" placeholder="Nama Lengkap" required></div>
      <div class="field"><input name="password" type="password" placeholder="Password" required></div>
      <div class="field"><input name="sesi" placeholder="Sesi (optional)"></div>
      <div class="field"><input name="jurusan_id" placeholder="Jurusan ID (uuid)" required></div>
      <div class="field"><input name="agama_id" placeholder="Agama ID (uuid)" required></div>
      <div style="display:flex;gap:8px;align-items:center">
        <button class="btn" type="submit">Daftar</button>
        <a href="/" style="color:#374151">Kembali ke halaman utama</a>
      </div>
    </form>
  </div>

<script>
document.getElementById('registerForm').addEventListener('submit', async function(e){
  e.preventDefault();
  const form = e.target;
  const data = {
    no_ujian: form.no_ujian.value.trim(),
    nama: form.nama.value.trim(),
    password: form.password.value,
    sesi: form.sesi.value ? form.sesi.value : undefined,
    jurusan_id: form.jurusan_id.value.trim(),
    agama_id: form.agama_id.value.trim()
  };

  try {
    const res = await fetch('/api/v2/register', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(data)
    });
    const json = await res.json();
    if (res.ok) {
      const token = json.data.token || json.data.token;
      if (token) localStorage.setItem('peserta_token', token);
      document.getElementById('message').textContent = 'Pendaftaran berhasil. Anda otomatis login.';
      // optional: redirect to exam page or scoreboard
      setTimeout(()=>{ window.location.href = '/'; }, 1200);
    } else {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').textContent = json.message || JSON.stringify(json);
    }
  } catch(err) {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').textContent = err.message;
  }
});
</script>
</body>
</html>
