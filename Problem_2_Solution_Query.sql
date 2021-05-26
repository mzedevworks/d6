SELECT cost_center_name,  AVG(charge) AS average_lab_charge
FROM invoices JOIN cost_centers ON invoices.cost_center_id=cost_centers.id
WHERE cost_center_name = 'Laboratory'
GROUP BY cost_center_name;