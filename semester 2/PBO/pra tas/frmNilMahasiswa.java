import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class frmNilMahasiswa extends JFrame implements ActionListener {
    private JLabel lblNIM, lblNama, lblJenisKelamin, lblMataKuliah, lblNilaiKuis, lblNilaiTugas, lblNilaiTTS, lblNilaiTAS,
            lblTotalNilai, lblNilaiHuruf;
    private JTextField txtNIM, txtNama, txtNilaiKuis, txtNilaiTugas, txtNilaiTTS, txtNilaiTAS, txtTotalNilai, txtNilaiHuruf;
    private JRadioButton rbLakiLaki, rbPerempuan;
    private ButtonGroup bgJenisKelamin;
    private JComboBox<String> cmbMataKuliah;
    private JButton btnHitung, btnTampil;
    private JTextArea txtAreaDetail, txtAreaTampil;

    public frmNilMahasiswa() {
        setTitle("frmNilMahasiswa");
        setSize(600, 400);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLocationRelativeTo(null);
        setLayout(new BorderLayout());

        JPanel panelInput = new JPanel();
        panelInput.setLayout(new GridLayout(14, 2));

        lblNIM = new JLabel("NIM");
        panelInput.add(lblNIM);

        txtNIM = new JTextField();
        panelInput.add(txtNIM);

        lblNama = new JLabel("Nama Mahasiswa");
        panelInput.add(lblNama);

        txtNama = new JTextField();
        panelInput.add(txtNama);

        lblJenisKelamin = new JLabel("Jenis Kelamin");
        panelInput.add(lblJenisKelamin);

        rbLakiLaki = new JRadioButton("Laki-Laki");
        rbPerempuan = new JRadioButton("Perempuan");
        bgJenisKelamin = new ButtonGroup();
        bgJenisKelamin.add(rbLakiLaki);
        bgJenisKelamin.add(rbPerempuan);
        JPanel pnlJenisKelamin = new JPanel();
        pnlJenisKelamin.add(rbLakiLaki);
        pnlJenisKelamin.add(rbPerempuan);
        panelInput.add(pnlJenisKelamin);

        lblMataKuliah = new JLabel("Mata Kuliah");
        panelInput.add(lblMataKuliah);

        String[] mataKuliah = {"pemrograman berorientasi objek", "sistem basis data", "aljabar linier",
                "logika informatika", "algoritma dan struktur data"};
        cmbMataKuliah = new JComboBox<>(mataKuliah);
        panelInput.add(cmbMataKuliah);

        lblNilaiKuis = new JLabel("Nilai Kuis");
        panelInput.add(lblNilaiKuis);

        txtNilaiKuis = new JTextField();
        panelInput.add(txtNilaiKuis);

        lblNilaiTugas = new JLabel("Nilai Tugas");
        panelInput.add(lblNilaiTugas);

        txtNilaiTugas = new JTextField();
        panelInput.add(txtNilaiTugas);

        lblNilaiTTS = new JLabel("Nilai TTS");
        panelInput.add(lblNilaiTTS);

        txtNilaiTTS = new JTextField();
        panelInput.add(txtNilaiTTS);

        lblNilaiTAS = new JLabel("Nilai TAS");
        panelInput.add(lblNilaiTAS);

        txtNilaiTAS = new JTextField();
        panelInput.add(txtNilaiTAS);

        lblTotalNilai = new JLabel("Total Nilai");
        panelInput.add(lblTotalNilai);

        txtTotalNilai = new JTextField();
        txtTotalNilai.setEditable(false);
        panelInput.add(txtTotalNilai);

        lblNilaiHuruf = new JLabel("Nilai Huruf");
        panelInput.add(lblNilaiHuruf);

        txtNilaiHuruf = new JTextField();
        txtNilaiHuruf.setEditable(false);
        panelInput.add(txtNilaiHuruf);

        btnHitung = new JButton("Hitung");
        btnHitung.addActionListener(this);
        panelInput.add(btnHitung);

        btnTampil = new JButton("Tampil");
        btnTampil.addActionListener(this);
        panelInput.add(btnTampil);

        txtAreaDetail = new JTextArea();
        JScrollPane scrollPaneDetail = new JScrollPane(txtAreaDetail);

        JPanel panelTampil = new JPanel(new BorderLayout());
        txtAreaTampil = new JTextArea();
        txtAreaTampil.setEditable(false);
        JScrollPane scrollPaneTampil = new JScrollPane(txtAreaTampil);
        panelTampil.add(scrollPaneTampil, BorderLayout.CENTER);

        JSplitPane splitPane = new JSplitPane(JSplitPane.HORIZONTAL_SPLIT, scrollPaneDetail, panelTampil);
        splitPane.setDividerLocation(300);
        splitPane.setOneTouchExpandable(true);

        add(panelInput, BorderLayout.WEST);
        add(splitPane, BorderLayout.CENTER);

        setVisible(true);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if (e.getSource() == btnHitung) {
            hitungTotalNilai();
        } else if (e.getSource() == btnTampil) {
            tampilkanDataDetail();
        }
    }

    private void hitungTotalNilai() {
        double nilaiKuis = Double.parseDouble(txtNilaiKuis.getText());
        double nilaiTugas = Double.parseDouble(txtNilaiTugas.getText());
        double nilaiTTS = Double.parseDouble(txtNilaiTTS.getText());
        double nilaiTAS = Double.parseDouble(txtNilaiTAS.getText());

        double totalNilai = 0.15 * nilaiKuis + 0.2 * nilaiTugas + 0.3 * nilaiTTS + 0.35 * nilaiTAS;
        txtTotalNilai.setText(String.valueOf(totalNilai));

        String nilaiHuruf;
        if (totalNilai >= 85) {
            nilaiHuruf = "A";
        } else if (totalNilai >= 70) {
            nilaiHuruf = "B";
        } else if (totalNilai >= 60) {
            nilaiHuruf = "C";
        } else if (totalNilai >= 50) {
            nilaiHuruf = "D";
        } else {
            nilaiHuruf = "E";
        }
        txtNilaiHuruf.setText(nilaiHuruf);
    }

    private void tampilkanDataDetail() {
        String data = "NIM: " + txtNIM.getText() + "\n" +
                "Nama Mahasiswa: " + txtNama.getText() + "\n" +
                "Jenis Kelamin: " + (rbLakiLaki.isSelected() ? "Laki-Laki" : "Perempuan") + "\n" +
                "Mata Kuliah: " + cmbMataKuliah.getSelectedItem() + "\n" +
                "Nilai Kuis: " + txtNilaiKuis.getText() + "\n" +
                "Nilai Tugas: " + txtNilaiTugas.getText() + "\n" +
                "Nilai TTS: " + txtNilaiTTS.getText() + "\n" +
                "Nilai TAS: " + txtNilaiTAS.getText() + "\n" +
                "Total Nilai: " + txtTotalNilai.getText() + "\n" +
                "Nilai Huruf: " + txtNilaiHuruf.getText() + "\n";

        txtAreaDetail.setText(data);

        String tampilData = "NIM: " + txtNIM.getText() + "\n" +
                "Nama Mahasiswa: " + txtNama.getText() + "\n" +
                "Total Nilai: " + txtTotalNilai.getText() + "\n" +
                "Nilai Huruf: " + txtNilaiHuruf.getText() + "\n";

        txtAreaTampil.setText(tampilData);
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable() {
            @Override
            public void run() {
                new frmNilMahasiswa();
            }
        });
    }
}
