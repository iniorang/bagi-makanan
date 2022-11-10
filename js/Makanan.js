class Menu{
    constructor(id,nameMenu,tipeMenu,pemilikMenu,jumlahMenu){
        this.id = id;
        this.nameMenu = nameMenu;
        this.tipeMenu = tipeMenu;
        this.pemilikMenu = pemilikMenu;
        this.jumlahMenu = jumlahMenu;
    }
    tambahMenu(){};
    editMenu(id){};
    hapusMenu(id){};
    lihatMenu(){};
}
const menu1 = new Menu("Gudeg Pak Jayak","Makanan","Budi","5");

console.log(menu1);