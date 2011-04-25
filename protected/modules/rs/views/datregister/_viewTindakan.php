    <tr>
        <td class="nama-dokter"><?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?></td>        
        <td class="nama-hari"><?php echo GxHtml::encode(GxHtml::valueEx($data->idreg0)); ?></td>
        <td class="nama-hari"><?php echo GxHtml::encode(GxHtml::valueEx($data->kdtindakan0)); ?></td>
        <td class="nama-hari"><?php echo GxHtml::encode($data->qty); ?></td>
        <td class="nama-hari"><?php echo GxHtml::encode($data->harga_satuan); ?></td>
    </tr>