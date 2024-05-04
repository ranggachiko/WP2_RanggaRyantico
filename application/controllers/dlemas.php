<?php
class dlemas extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_form_dlemas');
    }

    public function cetak()
    {
        // Aktifkan library Form Validation
        $this->load->library('form_validation');

        // Set aturan validasi untuk setiap input
        //$this->form_validation->set_rules('nama', 'Nama', 'required');
        //$this->form_validation->set_rules('nis', 'NIS', 'required');
        //$this->form_validation->set_rules('kelas', 'Kelas', 'required');
        //$this->form_validation->set_rules('tgllahir', 'Tanggal Lahir', 'required');
        //$this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'required');
        //$this->form_validation->set_rules('alamat', 'Alamat', 'required');
        //$this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required');
        //$this->form_validation->set_rules('agama', 'Agama', 'required');

        // Pengecekan apakah ada input yang kosong sebelum menjalankan validasi
        //if ($this->input->post('nama') === null || $this->input->post('nis') === null || $this->input->post('kelas') === null ||
          //  $this->input->post('tgllahir') === null || $this->input->post('tempatlahir') === null ||
            //$this->input->post('alamat') === null || $this->input->post('jeniskelamin') === null || $this->input->post('agama') === null) {
            // Tampilkan kembali formulir dengan pesan error
            //$this->load->view('view_form_dlemas');
        //} else {
            // Jika validasi berhasil, simpan data ke dalam variabel $data
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tgllahir' => $this->input->post('tgllahir'),
                'tempatlahir' => $this->input->post('tempatlahir'),
                'alamat' => $this->input->post('alamat'),
                'jeniskelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agama')
            ];

            // Tampilkan data siswa ke tampilan view_data_dlemas
          //  var_dump($data);
            //$this->load->view('view_data_dlemas', $data);

            $insert_id= $this->ModelDlemas->svdata($data);

            $dtsiswa = $this->ModelDlemas->alldata();
            $this->load->view('view_data_dlemas',['dtsiswa' => $dtsiswa]);
        }
    }
//}
