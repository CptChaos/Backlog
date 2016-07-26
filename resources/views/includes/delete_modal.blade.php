{{--
	Filename:   delete_modal.blade.php
	Date:       2016-07-26
	Author:     Lars Veldscholte
	            lars@veldscholte.eu
	            http://lars.veldscholte.eu

	Copyright 2016 Lars Veldscholte

	This file is part of Backlog2.

	Backlog2 is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	Backlog2 is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with Backlog2. If not, see <http://www.gnu.org/licenses/>.
--}}


<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Delete confirmation</h4>
			</div>
			<div class="modal-body">
				Are you sure you want to delete this item? This cannot be undone.
			</div>

			<div class="modal-footer">
				<form id="modalForm" action="" method="POST">
					{{csrf_field()}}
					<input type="hidden" name="_method" value="DELETE">

					<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
					<button type="submit" class="btn btn-default" name="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>