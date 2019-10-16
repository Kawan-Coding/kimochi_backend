<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Master extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //THE MASTER OF THE MASTER
    /*
     * Get allowed_payment by cabang_id
     */
    public function get_allowed_payment($cabang_id)
    {
        return $this->db->get_where('allowed_payment',array('cabang_id'=>$cabang_id))->row_array();
    }
        
    /*
     * Get all allowed_payment
     */
    public function get_all_allowed_payment()
    {
        $this->db->order_by('cabang_id', 'desc');
        return $this->db->get('allowed_payment')->result_array();
    }
        
    /*
     * public function untuk add new allowed_payment
     */
    public function add_allowed_payment($params)
    {
        $this->db->insert('allowed_payment',$params);
        return $this->db->insert_id();
    }
    
    /*
     * public function untuk update allowed_payment
     */
    public function update_allowed_payment($cabang_id,$params)
    {
        $this->db->where('cabang_id',$cabang_id);
        return $this->db->update('allowed_payment',$params);
    }
    
    /*
     * public function untuk delete allowed_payment
     */
    public function delete_allowed_payment($cabang_id)
    {
        return $this->db->delete('allowed_payment',array('cabang_id'=>$cabang_id));
    }
    
    public function get_barang($id)
    {
        return $this->db->get_where('barang',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all barang
     */
    public function get_all_barang()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('barang')->result_array();
    }
        
    /*
     * public function untuk add new barang
     */
    public function add_barang($params)
    {
        $this->db->insert('barang',$params);
        return $this->db->insert_id();
    }
    
    /*
     * public function untuk update barang
     */
    public function update_barang($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('barang',$params);
    }
    
    /*
     * public function untuk delete barang
     */
    public function delete_barang($id)
    {
        return $this->db->delete('barang',array('id'=>$id));
    }

    public function get_cabang($id)
    {
        return $this->db->get_where('cabang',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all cabang
     */
    public function get_all_cabang()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('cabang')->result_array();
    }
        
    /*
     * public function untuk add new cabang
     */
    public function add_cabang($params)
    {
        $this->db->insert('cabang',$params);
        return $this->db->insert_id();
    }
    
    /*
     * public function untuk update cabang
     */
    public function update_cabang($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('cabang',$params);
    }
    
    /*
     * public function untuk delete cabang
     */
    public function delete_cabang($id)
    {
        return $this->db->delete('cabang',array('id'=>$id));
    }

     /*
     * Get cash_flow by id
     */
    public function get_cash_flow($id)
    {
        return $this->db->get_where('cash_flow',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all cash_flow
     */
    public function get_all_cash_flow()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('cash_flow')->result_array();
    }
        
    /*
     * public function untuk add new cash_flow
     */
    public function add_cash_flow($params)
    {
        $this->db->insert('cash_flow',$params);
        return $this->db->insert_id();
    }
    
    /*
     * public function untuk update cash_flow
     */
    public function update_cash_flow($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('cash_flow',$params);
    }
    
    /*
     * public function untuk delete cash_flow
     */
    public function delete_cash_flow($id)
    {
        return $this->db->delete('cash_flow',array('id'=>$id));
    }

    public function get_customer($id)
    {
        return $this->db->get_where('customer',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all customer
     */
    public function get_all_customer()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('customer')->result_array();
    }
        
    /*
     * public function untuk add new customer
     */
    public function add_customer($params)
    {
        $this->db->insert('customer',$params);
        return $this->db->insert_id();
    }
    
    /*
     * public function untuk update customer
     */
    public function update_customer($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('customer',$params);
    }
    
    /*
     * public function untuk delete customer
     */
    public function delete_customer($id)
    {
        return $this->db->delete('customer',array('id'=>$id));
    }

     /*
     * Get jeni by id
     */
    public function get_jeni($id)
    {
        return $this->db->get_where('jenis',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all jenis
     */
    public function get_all_jenis()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('jenis')->result_array();
    }
        
    /*
     * public function untuk add new jeni
     */
    public function add_jenis($params)
    {
        $this->db->insert('jenis',$params);
        return $this->db->insert_id();
    }
    
    /*
     * public function untuk update jeni
     */
    public function update_jenis($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('jenis',$params);
    }
    
    /*
     * public function untuk delete jeni
     */
    public function delete_jenis($id)
    {
        return $this->db->delete('jenis',array('id'=>$id));
    }

      
    /*
     * Get kategori by id
     */
    public function get_kategori($id)
    {
        return $this->db->get_where('kategori',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all kategori
     */
    public function get_all_kategori()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('kategori')->result_array();
    }
        
    /*
     * public function untuk add new kategori
     */
    public function add_kategori($params)
    {
        $this->db->insert('kategori',$params);
        return $this->db->insert_id();
    }
    
    /*
     * public function untuk update kategori
     */
    public function update_kategori($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('kategori',$params);
    }
    
    /*
     * public function untuk delete kategori
     */
    public function delete_kategori($id)
    {
        return $this->db->delete('kategori',array('id'=>$id));
    }

     /*
     * Get member by id
     */
    public function get_member($id)
    {
        return $this->db->get_where('member',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all member
     */
    public function get_all_member()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('member')->result_array();
    }
        
    /*
     * public function untuk add new member
     */
    public function add_member($params)
    {
        $this->db->insert('member',$params);
        return $this->db->insert_id();
    }
    
    /*
     * public function untuk update member
     */
    public function update_member($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('member',$params);
    }
    
    /*
     * public function untuk delete member
     */
    public function delete_member($id)
    {
        return $this->db->delete('member',array('id'=>$id));
    }

     /*
     * Get metode_pembayaran by id
     */
    public function get_metode_pembayaran($id)
    {
        return $this->db->get_where('metode_pembayaran',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all metode_pembayaran
     */
    public function get_all_metode_pembayaran()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('metode_pembayaran')->result_array();
    }
        
    /*
     * public function untuk add new metode_pembayaran
     */
    public function add_metode_pembayaran($params)
    {
        $this->db->insert('metode_pembayaran',$params);
        return $this->db->insert_id();
    }
    
    /*
     * public function untuk update metode_pembayaran
     */
    public function update_metode_pembayaran($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('metode_pembayaran',$params);
    }
    
    /*
     * public function untuk delete metode_pembayaran
     */
    public function delete_metode_pembayaran($id)
    {
        return $this->db->delete('metode_pembayaran',array('id'=>$id));
    }

    
    /*
     * Get payment_method by id
     */
    public function get_payment_method($id)
    {
        return $this->db->get_where('payment_method',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all payment_method
     */
    public function get_all_payment_method()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('payment_method')->result_array();
    }
        
    /*
     * public function untuk add new payment_method
     */
    public function add_payment_method($params)
    {
        $this->db->insert('payment_method',$params);
        return $this->db->insert_id();
    }
    
    /*
     * public function untuk update payment_method
     */
    public function update_payment_method($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('payment_method',$params);
    }
    
    /*
     * public function untuk delete payment_method
     */
    public function delete_payment_method($id)
    {
        return $this->db->delete('payment_method',array('id'=>$id));
    }
    /*
     * Get payment by tr_id
     */
    public function get_payment($tr_id)
    {
        return $this->db->get_where('payment',array('tr_id'=>$tr_id))->row_array();
    }
        
    /*
     * Get all payment
     */
    public function get_all_payment()
    {
        $this->db->order_by('tr_id', 'desc');
        return $this->db->get('payment')->result_array();
    }
        
    /*
     * public function untuk add new payment
     */
    public function add_payment($params)
    {
        $this->db->insert('payment',$params);
        return $this->db->insert_id();
    }
    
    /*
     * public function untuk update payment
     */
    public function update_payment($tr_id,$params)
    {
        $this->db->where('tr_id',$tr_id);
        return $this->db->update('payment',$params);
    }
    
    /*
     * public function untuk delete payment
     */
    public function delete_payment($tr_id)
    {
        return $this->db->delete('payment',array('tr_id'=>$tr_id));
    }

     /*
     * Get pegawai by id
     */
    public function get_pegawai($id)
    {
        return $this->db->get_where('pegawai',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all pegawai
     */
    public function get_all_pegawai()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('pegawai')->result_array();
    }
        
    /*
     * public function untuk add new pegawai
     */
    public function add_pegawai($params)
    {
        $this->db->insert('pegawai',$params);
        return $this->db->insert_id();
    }
    
    /*
     * public function untuk update pegawai
     */
    public function update_pegawai($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('pegawai',$params);
    }
    
    /*
     * public function untuk delete pegawai
     */
    public function delete_pegawai($id)
    {
        return $this->db->delete('pegawai',array('id'=>$id));
    }

    /*
     * Get produk by id
     */
    public function get_produk($id)
    {
        return $this->db->get_where('produk',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all produk
     */
    public function get_all_produk()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('produk')->result_array();
    }
        
    /*
     * public function untuk add new produk
     */
    public function add_produk($params)
    {
        $this->db->insert('produk',$params);
        return $this->db->insert_id();
    }
    
    /*
     * public function untuk update produk
     */
    public function update_produk($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('produk',$params);
    }
    
    /*
     * public function untuk delete produk
     */
    public function delete_produk($id)
    {
        return $this->db->delete('produk',array('id'=>$id));
    }

     /*
     * Get responsible by id
     */
    public function get_responsible($id)
    {
        return $this->db->get_where('responsible',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all responsible
     */
    public function get_all_responsible()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('responsible')->result_array();
    }
        
    /*
     * public function untuk add new responsible
     */
    public function add_responsible($params)
    {
        $this->db->insert('responsible',$params);
        return $this->db->insert_id();
    }
    
    /*
     * public function untuk update responsible
     */
    public function update_responsible($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('responsible',$params);
    }
    
    /*
     * public function untuk delete responsible
     */
    public function delete_responsible($id)
    {
        return $this->db->delete('responsible',array('id'=>$id));
    }

     /*
     * Get status_transaksi by id
     */
    public function get_status_transaksi($id)
    {
        return $this->db->get_where('status_transaksi',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all status_transaksi
     */
    public function get_all_status_transaksi()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('status_transaksi')->result_array();
    }
        
    /*
     * public function untuk add new status_transaksi
     */
    public function add_status_transaksi($params)
    {
        $this->db->insert('status_transaksi',$params);
        return $this->db->insert_id();
    }
    
    /*
     * public function untuk update status_transaksi
     */
    public function update_status_transaksi($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('status_transaksi',$params);
    }
    
    /*
     * public function untuk delete status_transaksi
     */
    public function delete_status_transaksi($id)
    {
        return $this->db->delete('status_transaksi',array('id'=>$id));
    }

     /*
     * Get taking_order by id
     */
    public function get_taking_order($id)
    {
        return $this->db->get_where('taking_order',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all taking_order
     */
    public function get_all_taking_order()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('taking_order')->result_array();
    }
        
    /*
     * public function untuk add new taking_order
     */
    public function add_taking_order($params)
    {
        $this->db->insert('taking_order',$params);
        return $this->db->insert_id();
    }
    
    /*
     * public function untuk update taking_order
     */
    public function update_taking_order($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('taking_order',$params);
    }
    
    /*
     * public function untuk delete taking_order
     */
    public function delete_taking_order($id)
    {
        return $this->db->delete('taking_order',array('id'=>$id));
    }

    

    
}