//#include <stdio.h>
//#include <stdlib.h>
//#include <string.h>

#define MAX_MAHASISWA 100

typedef struct {
    char npm[20];
    char nama[100];
    char tempat_lahir[100];
    char tanggal_lahir[20];
    char prodi[50];
} Mahasiswa;

Mahasiswa mahasiswa[MAX_MAHASISWA];
int jumlahMahasiswa = 0;

void tambahMahasiswa() {
    if (jumlahMahasiswa >= MAX_MAHASISWA) {
        printf("Jumlah mahasiswa sudah mencapai batas maksimum.\n");
        return;
    }

    printf("Masukkan NPM: ");
    scanf(" %19[^\n]", mahasiswa[jumlahMahasiswa].npm);
    printf("Masukkan Nama: ");
    scanf(" %99[^\n]", mahasiswa[jumlahMahasiswa].nama);
    printf("Masukkan Tempat Lahir: ");
    scanf(" %99[^\n]", mahasiswa[jumlahMahasiswa].tempat_lahir);
    printf("Masukkan Tanggal Lahir: ");
    scanf(" %19[^\n]", mahasiswa[jumlahMahasiswa].tanggal_lahir);
    printf("Masukkan Prodi: ");
    scanf(" %49[^\n]", mahasiswa[jumlahMahasiswa].prodi);

    jumlahMahasiswa++;
    printf("Mahasiswa berhasil ditambahkan.\n\n");
}

void hapusMahasiswa(int index) {
    if (index < 0 || index >= jumlahMahasiswa) {
        printf("Indeks tidak benar.\n");
        return;
    }

    for (int i = index; i < jumlahMahasiswa - 1; i++) {
        mahasiswa[i] = mahasiswa[i + 1];
    }

    jumlahMahasiswa--;
    printf("Data mahasiswa berhasil dihapus.\n\n");
}

void tampilkanMahasiswa() {
    printf("Data Mahasiswa:\n");
    printf("No.\tNPM\t\tNama\t\tTempat Lahir\tTanggal Lahir\tProdi\n");
    for (int i = 0; i < jumlahMahasiswa; i++) {
        printf("%d\t%s\t%s\t%s\t%s\t%s\n", i + 1, mahasiswa[i].npm, mahasiswa[i].nama,
               mahasiswa[i].tempat_lahir, mahasiswa[i].tanggal_lahir, mahasiswa[i].prodi);
    }
    printf("\n");
}

int main() {
    int pilihan, index;

    while (1) {
        printf("Menu:\n");
        printf("1. Tambah Mahasiswa\n");
        printf("2. Hapus Mahasiswa\n");
        printf("3. Tampilkan Data Mahasiswa\n");
        printf("4. Keluar\n");
        printf("Pilih opsi: ");
        scanf("%d", &pilihan);

        switch (pilihan) {
            case 1:
                tambahMahasiswa();
                break;
            case 2:
                printf("Masukkan indeks yang ingin dihapus: ");
                scanf("%d", &index);
                hapusMahasiswa(index - 1);
                break;
            case 3:
                tampilkanMahasiswa();
                break;
            case 4:
                exit(0);
            default:
                printf("Pilihan tidak benar.\n");
        }
    }

    return 0;
}
