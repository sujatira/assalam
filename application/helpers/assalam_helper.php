<?php

function cek_login() //cek akses login untuk admin
{
	$apa = get_instance();
	if (!$apa->session->userdata('email')) {
		redirect('auth');
	} else {
		$role_id = $apa->session->userdata('role_id');
		$menu = $apa->uri->segment(1);

		$queryMenu = $apa->db->get_where('tbl_user_menu', ['menu' => $menu])->row_array();
		$menu_id = $queryMenu['id'];

		$userAccess = $apa->db->get_where('tbl_user_access_menu', ['role_id' => $role_id, 'menu_id' => $menu_id]);
	}

	if ($userAccess->num_rows() < 1) {
		redirect('usermenu');
	}
}
