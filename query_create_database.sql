/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     13/03 8:25                                   */
/*==============================================================*/


drop table if exists CHITIET_GH;

drop table if exists CHITIET_HD;

drop table if exists CHITIET_KHO;

drop table if exists CHITIET_NHAP;

drop table if exists DANH_GIA;

drop table if exists DON_VAN_CHUYEN;

drop table if exists HOA_DON;

drop table if exists KHACH_HANG;

drop table if exists KHO;

drop table if exists KHUYEN_MAI;

drop table if exists LOAI_SP;

drop table if exists NGUON_HANG;

drop table if exists NHAN_VIEN;

drop table if exists NHA_VAN_CHUYEN;

drop table if exists PT_THANHTOAN;

drop table if exists SAN_PHAM;

drop table if exists TAI_KHOAN;

/*==============================================================*/
/* Table: CHITIET_GH                                            */
/*==============================================================*/
create table CHITIET_GH
(
   KH_ID                int not null,
   SP_ID                int not null,
   SP_SOLUONG           numeric(8,0) not null
);

/*==============================================================*/
/* Table: CHITIET_HD                                            */
/*==============================================================*/
create table CHITIET_HD
(
   SP_ID                int not null,
   HD_ID                int not null,
   SP_SOLUONG           numeric(8,0) not null
);

/*==============================================================*/
/* Table: CHITIET_KHO                                           */
/*==============================================================*/
create table CHITIET_KHO
(
   SP_ID                int not null,
   K_ID                 int not null,
   SP_SOLUONG           numeric(8,0) not null
);

/*==============================================================*/
/* Table: CHITIET_NHAP                                          */
/*==============================================================*/
create table CHITIET_NHAP
(
   NH_ID                int not null,
   SP_ID                int not null,
   NV_ID                int not null,
   NH_NGAYNHAP          date not null,
   SP_SOLUONG           numeric(8,0) not null,
   SP_DVT               char(5) not null,
   primary key (NH_ID, SP_ID)
);

/*==============================================================*/
/* Table: DANH_GIA                                              */
/*==============================================================*/
create table DANH_GIA
(
   DG_ID                int not null,
   TK_ID                int not null,
   NV_ID                int not null,
   DG_TIEUDE            char(50) not null,
   DG_NOIDUNG           text not null,
   DG_RATE              tinyint not null,
   DG_PHANHOI           text,
   primary key (DG_ID)
);

/*==============================================================*/
/* Table: DON_VAN_CHUYEN                                        */
/*==============================================================*/
create table DON_VAN_CHUYEN
(
   DVC_ID               int not null,
   NVC_ID               int not null,
   DVC_NGAYGIAOHANG     date not null,
   DVC_DIACHI           text,
   DVC_TGBATDAU         date,
   DVC_TGHOANTHANH      date,
   primary key (DVC_ID)
);

/*==============================================================*/
/* Table: HOA_DON                                               */
/*==============================================================*/
create table HOA_DON
(
   HD_ID                int not null,
   DVC_ID               int not null,
   KM_ID                int,
   NV_ID                int not null,
   PTTT_ID              int not null,
   KH_ID                int not null,
   HD_TONGTIEN          float not null,
   HD_TRANGTHAI         char(1),
   primary key (HD_ID)
);

/*==============================================================*/
/* Table: KHACH_HANG                                            */
/*==============================================================*/
create table KHACH_HANG
(
   KH_ID                int not null,
   TK_ID                int not null,
   KH_HOTEN             char(50) not null,
   KH_SDT               char(10) not null,
   KH_EMAIL             char(30) not null,
   KH_NGAYSINH          date not null,
   KH_DIACHI            text not null,
   KH_GIOITINH          char(1) not null,
   primary key (KH_ID)
);

/*==============================================================*/
/* Table: KHO                                                   */
/*==============================================================*/
create table KHO
(
   K_ID                 int not null,
   K_DIACHI             text not null,
   primary key (K_ID)
);

/*==============================================================*/
/* Table: KHUYEN_MAI                                            */
/*==============================================================*/
create table KHUYEN_MAI
(
   KM_ID                int not null,
   KM_TGBATDAU          date not null,
   KM_TGKETTHUC         date not null,
   KM_GIATRI            float(4) not null,
   primary key (KM_ID)
);

/*==============================================================*/
/* Table: LOAI_SP                                               */
/*==============================================================*/
create table LOAI_SP
(
   LSP_ID               int not null,
   LSP_TEN              char(50) not null,
   primary key (LSP_ID)
);

/*==============================================================*/
/* Table: NGUON_HANG                                            */
/*==============================================================*/
create table NGUON_HANG
(
   NH_ID                int not null,
   NH_TENNGUON          char(40) not null,
   primary key (NH_ID)
);

/*==============================================================*/
/* Table: NHAN_VIEN                                             */
/*==============================================================*/
create table NHAN_VIEN
(
   NV_ID                int not null,
   TK_ID                int not null,
   NV_HOTEN             char(50) not null,
   NV_SDT               char(10) not null,
   NV_EMAIL             char(50) not null,
   NV_NGAYSINH          date not null,
   NV_GIOITINH          char(1) not null,
   NV_NGAYTUYEN         date not null,
   primary key (NV_ID)
);

/*==============================================================*/
/* Table: NHA_VAN_CHUYEN                                        */
/*==============================================================*/
create table NHA_VAN_CHUYEN
(
   NVC_ID               int not null,
   NVC_TEN              char(40) not null,
   primary key (NVC_ID)
);

/*==============================================================*/
/* Table: PT_THANHTOAN                                          */
/*==============================================================*/
create table PT_THANHTOAN
(
   PTTT_ID              int not null,
   PTTT_TEN             char(50) not null,
   primary key (PTTT_ID)
);

/*==============================================================*/
/* Table: SAN_PHAM                                              */
/*==============================================================*/
create table SAN_PHAM
(
   SP_ID                int not null,
   LSP_ID               int not null,
   DG_ID                int,
   SP_TEN               char(50) not null,
   SP_MOTA              char(200) not null,
   SP_GIA               float not null,
   SP_HINHANH           text,
   primary key (SP_ID)
);

/*==============================================================*/
/* Table: TAI_KHOAN                                             */
/*==============================================================*/
create table TAI_KHOAN
(
   TK_ID                int not null,
   TK_TENDANGNHAP       char(30) not null,
   TK_MATKHAU           char(30) not null,
   TK_AVATAR            text not null,
   TK_VAITRO            char(30) not null,
   primary key (TK_ID)
);

alter table CHITIET_GH add constraint FK_RELATIONSHIP_18 foreign key (KH_ID)
      references KHACH_HANG (KH_ID) on delete restrict on update restrict;

alter table CHITIET_GH add constraint FK_RELATIONSHIP_19 foreign key (SP_ID)
      references SAN_PHAM (SP_ID) on delete restrict on update restrict;

alter table CHITIET_HD add constraint FK_RELATIONSHIP_20 foreign key (SP_ID)
      references SAN_PHAM (SP_ID) on delete restrict on update restrict;

alter table CHITIET_HD add constraint FK_RELATIONSHIP_21 foreign key (HD_ID)
      references HOA_DON (HD_ID) on delete restrict on update restrict;

alter table CHITIET_KHO add constraint FK_RELATIONSHIP_22 foreign key (SP_ID)
      references SAN_PHAM (SP_ID) on delete restrict on update restrict;

alter table CHITIET_KHO add constraint FK_RELATIONSHIP_23 foreign key (K_ID)
      references KHO (K_ID) on delete restrict on update restrict;

alter table CHITIET_NHAP add constraint FK_DO_NV foreign key (NV_ID)
      references NHAN_VIEN (NV_ID) on delete restrict on update restrict;

alter table CHITIET_NHAP add constraint FK_RELATIONSHIP_24 foreign key (NH_ID)
      references NGUON_HANG (NH_ID) on delete restrict on update restrict;

alter table CHITIET_NHAP add constraint FK_RELATIONSHIP_25 foreign key (SP_ID)
      references SAN_PHAM (SP_ID) on delete restrict on update restrict;

alter table DANH_GIA add constraint FK_DANH_GIA foreign key (TK_ID)
      references TAI_KHOAN (TK_ID) on delete restrict on update restrict;

alter table DANH_GIA add constraint FK_NV_PHAN_HOI foreign key (NV_ID)
      references NHAN_VIEN (NV_ID) on delete restrict on update restrict;

alter table DON_VAN_CHUYEN add constraint FK_DO foreign key (NVC_ID)
      references NHA_VAN_CHUYEN (NVC_ID) on delete restrict on update restrict;

alter table HOA_DON add constraint FK_AP_DUNG foreign key (KM_ID)
      references KHUYEN_MAI (KM_ID) on delete restrict on update restrict;

alter table HOA_DON add constraint FK_CO_HOADON foreign key (KH_ID)
      references KHACH_HANG (KH_ID) on delete restrict on update restrict;

alter table HOA_DON add constraint FK_CO_PHUONGTHUC foreign key (PTTT_ID)
      references PT_THANHTOAN (PTTT_ID) on delete restrict on update restrict;

alter table HOA_DON add constraint FK_THUOC foreign key (DVC_ID)
      references DON_VAN_CHUYEN (DVC_ID) on delete restrict on update restrict;

alter table HOA_DON add constraint FK_XACNHAN foreign key (NV_ID)
      references NHAN_VIEN (NV_ID) on delete restrict on update restrict;

alter table KHACH_HANG add constraint FK_KH_CO_TK foreign key (TK_ID)
      references TAI_KHOAN (TK_ID) on delete restrict on update restrict;

alter table NHAN_VIEN add constraint FK_TK_NV foreign key (TK_ID)
      references TAI_KHOAN (TK_ID) on delete restrict on update restrict;

alter table SAN_PHAM add constraint FK_CO_DANH_GIA foreign key (DG_ID)
      references DANH_GIA (DG_ID) on delete restrict on update restrict;

alter table SAN_PHAM add constraint FK_THUOC_LOAI foreign key (LSP_ID)
      references LOAI_SP (LSP_ID) on delete restrict on update restrict;

