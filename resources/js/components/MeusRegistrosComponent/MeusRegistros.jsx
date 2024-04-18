import React, { useEffect, useState, useRef } from "react";
import { createRoot } from "react-dom/client";
import { RegistrosContainer, Registros, Text } from "./index";
import { motion } from "framer-motion";
import axios from "axios";

const MeusRegistrosComponent = () => {
    const carousel = useRef();
    const [width, setWidth] = useState(0);
    const [registros, setRegistros] = useState([""]);

    useEffect(() => {
        const fetchFeedback = async () => {
            try {
                const userIdFromElement = document
                    .getElementById("meus-registros")
                    .getAttribute("user-id");
                const feedbackResponse = await axios.get(
                    `http://localhost:8000/api/faleconosco/${userIdFromElement}`
                );
                setRegistros(feedbackResponse.data);
                // Definir a referência carousel.current após obter os dados necessários
                carousel.current = document.querySelector(".carousel");

                // Calcular a largura após definir a referência
                setWidth(
                    carousel.current?.scrollWidth -
                        carousel.current?.offsetWidth
                );
            } catch (error) {
                console.error("Erro ao buscar meus registro:", error);
            }
        };

        fetchFeedback();
    });

    const formatarData = (dataString) => {
        const data = new Date(dataString);
        return data.toLocaleDateString("pt-BR");
    };

    return (
        <RegistrosContainer>
            <motion.div
                ref={carousel}
                className="carousel"
                whileTap={{ cursor: "grabbing" }}
            >
                <motion.div
                    className="inner"
                    drag="x"
                    dragConstraints={{ right: 0, left: -width }}
                    initial={{ x: 100 }}
                    animate={{ x: 0 }}
                    transition={{ duration: 0.8 }}
                >
                    {registros.map((registro, index) => (
                        <motion.div className="item" key={index}>
                            <Text>
                                <strong>Motivo do Contato:</strong>{" "}
                                {registro.motivos && registro.motivos.motivo}
                            </Text>
                            <Text>
                                <strong>Mensagem:</strong> {registro.mensagem}
                            </Text>
                            <Text>
                                <strong>Data de Criação:</strong>{" "}
                                {formatarData(registro.created_at)}
                            </Text>
                            <Text>
                                <strong>E-mail de Contato:</strong>{" "}
                                {registro.email_contato}
                            </Text>
                            <Text>
                                <strong>Telefone:</strong> {registro.telefone}
                            </Text>
                        </motion.div>
                    ))}
                </motion.div>
            </motion.div>
        </RegistrosContainer>

        // <div>
        //     <motion.h1 animate={{ x: 200 }}>oláa</motion.h1>
        // </div>
    );
};

export default MeusRegistrosComponent;

const rootElement = document.getElementById("meus-registros");

if (rootElement) {
    // Verifique se o elemento raiz existe
    const Index = createRoot(rootElement);
    Index.render(<MeusRegistrosComponent />);
}
