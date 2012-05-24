<table class="recordstable sortme">
	<thead>
		<tr>
			<% control Headings %>
				<th>$Heading</th>
			<% end_control %>
		</tr>
	</thead>
	<tbody>		
	<% control Records %>
		<tr class="$EvenOdd">
			<% control PrintableFields %><td class="$Label">$Value</td><% end_control %>
		</tr>
	<% end_control %>
	</tbody>
</table>