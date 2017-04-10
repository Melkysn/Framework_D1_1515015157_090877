	<div class="form-group">
		<label class="col-sm-2 control-label" id="nama">Nama</label>
		<div class="col-sm-10">
			{!! form::text('nama',null,['class'=>'form-control', 'id'=>'nama', 'placeholder'=>"nama"]) !!}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" id='nip'>nip</label>
				<div class="col-sm-10">
					{!! form::text('nip',null,['class'=>'form-control','id'=>'nip', 'placeholder'=>"nip"]) !!}
					</div>
				</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" id='alamat'>Alamat</label>
				<div class="col-sm-10">
					{!! form::textarea('alamat',null,['class'=>'form-control','id'=>'alamat', 'placeholder'=>"Alamat"]) !!}
					</div>
				</div>	

			<div class="form-group">
				<label class="col-sm-2 control-label">Username</label>
				<div class="col-sm-10">
					{!! form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
					</div>
				</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					{!! form::password('password',['class'=>'form-control','placeholder'=>"password"]) !!}
					</div>
				</div>
