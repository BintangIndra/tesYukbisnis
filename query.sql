SELECT id_murid, murid.name, pendidikan.status as pendidikan_terakhir , murid.time_create, pendidikan.time_create as  time_updated
FROM murid
JOIN pendidikan on pendidikan.id_murid = murid.id
GROUP BY pendidikan.id_murid