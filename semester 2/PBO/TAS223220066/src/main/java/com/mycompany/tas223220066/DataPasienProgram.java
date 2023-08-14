import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.ArrayList;
import javax.swing.JOptionPane;

public class DataPasienProgram extends javax.swing.JFrame {
    private ArrayList<Pasien> dataPasien;

    public DataPasienProgram() {
        initComponents();
        dataPasien = new ArrayList<>();
    }

    private void initComponents() {
        lblNoRM = new javax.swing.JLabel();
        txtNoRM = new javax.swing.JTextField();
        lblNama = new javax.swing.JLabel();
        txtNama = new javax.swing.JTextField();
        lblAlamat = new javax.swing.JLabel();
        txtAlamat = new javax.swing.JTextField();
        lblJenisKelamin = new javax.swing.JLabel();
        cmbJenisKelamin = new javax.swing.JComboBox<>();
        lblGolDarah = new javax.swing.JLabel();
        cmbGolDarah = new javax.swing.JComboBox<>();
        lblPoli = new javax.swing.JLabel();
        cmbPoli = new javax.swing.JComboBox<>();
        btnSimpan = new javax.swing.JButton();
        btnBaca = new javax.swing.JButton();
        jScrollPane1 = new javax.swing.JScrollPane();
        txtAreaOutput = new javax.swing.JTextArea();
        btnKeluar = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Program Data Pasien");

        lblNoRM.setText("No RM");

        lblNama.setText("Nama Pasien");

        lblAlamat.setText("Alamat");

        lblJenisKelamin.setText("Jenis Kelamin");

        cmbJenisKelamin.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "Pria", "Wanita" }));

        lblGolDarah.setText("Golongan Darah");

        cmbGolDarah.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "A", "B", "AB", "O" }));

        lblPoli.setText("Poli Spesialis");

        cmbPoli.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "Penyakit Dalam", "THT", "Anak", "Kandungan" }));

        btnSimpan.setText("Simpan");
        btnSimpan.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent evt) {
                btnSimpanActionPerformed(evt);
            }
        });

        btnBaca.setText("Baca Data");
        btnBaca.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent evt) {
                btnBacaActionPerformed(evt);
            }
        });

        txtAreaOutput.setEditable(false);
        txtAreaOutput.setColumns(20);
        txtAreaOutput.setRows(5);
        jScrollPane1.setViewportView(txtAreaOutput);

        btnKeluar.setText("Keluar");
        btnKeluar.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent evt) {
                btnKeluarActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(lblNoRM)
                            .addComponent(lblNama)
                            .addComponent(lblAlamat)
                            .addComponent(lblJenisKelamin)
                            .addComponent(lblGolDarah)
                            .addComponent(lblPoli))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                            .addComponent(txtNoRM)
                            .addComponent(txtNama)
                            .addComponent(txtAlamat)
                            .addComponent(cmbJenisKelamin, 0, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                            .addComponent(cmbGolDarah, 0, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                            .addComponent(cmbPoli, 0, 200, Short.MAX_VALUE)))
                    .addComponent(btnSimpan)
                    .addComponent(btnBaca))
                .addGap(18, 18, 18)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jScrollPane1, javax.swing.GroupLayout.DEFAULT_SIZE, 226, Short.MAX_VALUE)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                        .addGap(0, 0, Short.MAX_VALUE)
                        .addComponent(btnKeluar)))
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(lblNoRM)
                            .addComponent(txtNoRM, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(lblNama)
                            .addComponent(txtNama, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(lblAlamat)
                            .addComponent(txtAlamat, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(lblJenisKelamin)
                            .addComponent(cmbJenisKelamin, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(lblGolDarah)
                            .addComponent(cmbGolDarah, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(lblPoli)
                            .addComponent(cmbPoli, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addComponent(btnSimpan)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(btnBaca)
                        .addGap(0, 0, Short.MAX_VALUE))
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(jScrollPane1, javax.swing.GroupLayout.DEFAULT_SIZE, 250, Short.MAX_VALUE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(btnKeluar)))
                .addContainerGap())
        );

        pack();
    }

    private void btnSimpanActionPerformed(ActionEvent evt) {
        String noRM = txtNoRM.getText();
        String nama = txtNama.getText();
        String alamat = txtAlamat.getText();
        String jenisKelamin = (String) cmbJenisKelamin.getSelectedItem();
        String golDarah = (String) cmbGolDarah.getSelectedItem();
        String poli = (String) cmbPoli.getSelectedItem();

        Pasien pasien = new Pasien(noRM, nama, alamat, jenisKelamin, golDarah, poli);
        dataPasien.add(pasien);

        JOptionPane.showMessageDialog(this, "Data Pasien telah disimpan.");

        clearForm();
    }

    private void btnBacaActionPerformed(ActionEvent evt) {
        displayDataPasien();
    }

    private void btnKeluarActionPerformed(ActionEvent evt) {
        System.exit(0);
    }

    private void clearForm() {
        txtNoRM.setText("");
        txtNama.setText("");
        txtAlamat.setText("");
        cmbJenisKelamin.setSelectedIndex(0);
        cmbGolDarah.setSelectedIndex(0);
        cmbPoli.setSelectedIndex(0);
    }

    private void displayDataPasien() {
        txtAreaOutput.setText("");
        for (Pasien pasien : dataPasien) {
            txtAreaOutput.append("No RM: " + pasien.getNoRM() + "\n");
            txtAreaOutput.append("Nama: " + pasien.getNama() + "\n");
            txtAreaOutput.append("Alamat: " + pasien.getAlamat() + "\n");
            txtAreaOutput.append("Jenis Kelamin: " + pasien.getJenisKelamin() + "\n");
            txtAreaOutput.append("Golongan Darah: " + pasien.getGolDarah() + "\n");
            txtAreaOutput.append("Poli Spesialis: " + pasien.getPoli() + "\n");
            txtAreaOutput.append("-----------------------\n");
        }
    }

    public static void main(String args[]) {
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new DataPasienProgram().setVisible(true);
            }
        });
    }

    private javax.swing.JButton btnBaca;
    private javax.swing.JButton btnKeluar;
    private javax.swing.JButton btnSimpan;
    private javax.swing.JComboBox<String> cmbGolDarah;
    private javax.swing.JComboBox<String> cmbJenisKelamin;
    private javax.swing.JComboBox<String> cmbPoli;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JLabel lblAlamat;
    private javax.swing.JLabel lblGolDarah;
    private javax.swing.JLabel lblJenisKelamin;
    private javax.swing.JLabel lblNama;
    private javax.swing.JLabel lblNoRM;
    private javax.swing.JLabel lblPoli;
    private javax.swing.JTextArea txtAreaOutput;
    private javax.swing.JTextField txtAlamat;
    private javax.swing.JTextField txtNama;
    private javax.swing.JTextField txtNoRM;
}
