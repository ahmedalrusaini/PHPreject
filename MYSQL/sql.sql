--
-- Database: `projectphpdb`
--
create database projectphpdb;
use projectphpdb;

CREATE TABLE `jobs` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) DEFAULT 'unknown'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `jobs`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `jobs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;