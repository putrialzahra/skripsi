<div class="form-container" style="max-width: 600px; margin: 30px auto; padding: 30px; background: white; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); font-family: 'Segoe UI', sans-serif;">
  <div style="text-align: center; margin-bottom: 30px;">
    <h2 style="color: #2c3e50; font-weight: 600; margin-bottom: 10px; font-size: 28px;">FORMULIR PENERIMAAN PESERTA DIDIK BARU</h2>
    <div style="height: 4px; width: 80px; background: linear-gradient(to right, #3498db, #2ecc71); margin: 0 auto; border-radius: 2px;"></div>
  </div>
  
  <form style="transition: all 0.3s ease;">
    <!-- Nama Lengkap -->
    <div style="margin-bottom: 20px; position: relative;">
      <label style="display: block; margin-bottom: 8px; color: #34495e; font-weight: 500;">Nama Lengkap</label>
      <input type="text" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; transition: all 0.3s; font-size: 16px;" placeholder="Masukkan nama lengkap">
      <div style="position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background: #3498db; transition: all 0.3s;"></div>
    </div>
    
    <!-- Tempat & Tanggal Lahir -->
    <div style="display: flex; gap: 20px; margin-bottom: 20px;">
      <div style="flex: 1; position: relative;">
        <label style="display: block; margin-bottom: 8px; color: #34495e; font-weight: 500;">Tempat Lahir</label>
        <input type="text" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; transition: all 0.3s; font-size: 16px;" placeholder="Kota kelahiran">
      </div>
      <div style="flex: 1; position: relative;">
        <label style="display: block; margin-bottom: 8px; color: #34495e; font-weight: 500;">Tanggal Lahir</label>
        <input type="date" style="width: 100%; padding: 11px 15px; border: 1px solid #ddd; border-radius: 8px; transition: all 0.3s; font-size: 16px;">
      </div>
    </div>
    
    <!-- Jenis Kelamin -->
    <div style="margin-bottom: 20px;">
      <label style="display: block; margin-bottom: 8px; color: #34495e; font-weight: 500;">Jenis Kelamin</label>
      <div style="display: flex; gap: 20px;">
        <label style="flex: 1; display: flex; align-items: center; padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
          <input type="radio" name="jenis_kelamin" style="margin-right: 10px; accent-color: #3498db;">
          <span>Laki-laki</span>
        </label>
        <label style="flex: 1; display: flex; align-items: center; padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; cursor: pointer; transition: all 0.3s;">
          <input type="radio" name="jenis_kelamin" style="margin-right: 10px; accent-color: #3498db;">
          <span>Perempuan</span>
        </label>
      </div>
    </div>
    
    <!-- Alamat -->
    <div style="margin-bottom: 20px; position: relative;">
      <label style="display: block; margin-bottom: 8px; color: #34495e; font-weight: 500;">Alamat Lengkap</label>
      <textarea style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; min-height: 100px; resize: vertical; transition: all 0.3s; font-size: 16px;" placeholder="Alamat tempat tinggal saat ini"></textarea>
    </div>
    
    <!-- Asal Sekolah -->
    <div style="margin-bottom: 20px; position: relative;">
      <label style="display: block; margin-bottom: 8px; color: #34495e; font-weight: 500;">Asal Sekolah</label>
      <input type="text" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; transition: all 0.3s; font-size: 16px;" placeholder="Nama sekolah sebelumnya">
    </div>
    
    <!-- Nomor HP & Email -->
    <div style="display: flex; gap: 20px; margin-bottom: 20px;">
      <div style="flex: 1; position: relative;">
        <label style="display: block; margin-bottom: 8px; color: #34495e; font-weight: 500;">Nomor HP</label>
        <input type="tel" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; transition: all 0.3s; font-size: 16px;" placeholder="0812-3456-7890">
      </div>
      <div style="flex: 1; position: relative;">
        <label style="display: block; margin-bottom: 8px; color: #34495e; font-weight: 500;">Email <span style="color: #7f8c8d; font-weight: normal;">(Opsional)</span></label>
        <input type="email" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; transition: all 0.3s; font-size: 16px;" placeholder="email@contoh.com">
      </div>
    </div>
    
    <!-- Tombol Submit -->
    <button type="submit" style="width: 100%; padding: 15px; background: linear-gradient(to right, #3498db, #2ecc71); color: white; border: none; border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer; transition: all 0.3s; box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);">
      KIRIM PENDAFTARAN
      <span style="display: inline-block; margin-left: 8px; transition: transform 0.3s;">→</span>
    </button>
  </form>
</div>

<script>
  // Animasi sederhana saat hover
  document.querySelectorAll('input, textarea').forEach(input => {
    input.addEventListener('focus', function() {
      this.style.borderColor = '#3498db';
      this.style.boxShadow = '0 0 0 3px rgba(52, 152, 219, 0.2)';
      this.parentElement.querySelector('div').style.width = '100%';
    });
    
    input.addEventListener('blur', function() {
      this.style.borderColor = '#ddd';
      this.style.boxShadow = 'none';
      this.parentElement.querySelector('div').style.width = '0';
    });
  });
  
  document.querySelector('button').addEventListener('mouseover', function() {
    this.querySelector('span').style.transform = 'translateX(4px)';
  });
  
  document.querySelector('button').addEventListener('mouseout', function() {
    this.querySelector('span').style.transform = 'translateX(0)';
  });
</script>